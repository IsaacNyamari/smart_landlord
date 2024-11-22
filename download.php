<?php
require 'vendor/autoload.php';

use Fpdf\Fpdf;

// Database connection
$host = 'localhost';
$db = 'landlord';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

class PDF extends FPDF
{
    private $title;

    public function __construct($title)
    {
        parent::__construct();
        $this->title = $title;
    }

    // Header function
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $logo = 'logo.png';
        $logoWidth = 30; // Adjust width as needed
        $this->Image($logo, ($this->GetPageWidth() - $logoWidth) / 2, 10, $logoWidth);
        $this->Ln(30);
        $this->Cell(0, 10, $this->title, 0, 1, 'C'); // Use the dynamic title
        $this->Ln(10);
    }

    // Footer function
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

function generatePDF($tableName, $title, $columns = [])
{
    global $pdo;

    // Get all columns from the table if no specific columns are specified
    if (empty($columns)) {
        $stmt = $pdo->query("DESCRIBE $tableName");
        $columns = $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    // Validate columns against the table's actual structure
    $stmt = $pdo->query("DESCRIBE $tableName");
    $validColumns = $stmt->fetchAll(PDO::FETCH_COLUMN);
    $columns = array_intersect($columns, $validColumns);

    if (empty($columns)) {
        die("Error: No valid columns specified for the table '$tableName'.");
    }

    // Fetch only the specified columns
    $columnList = implode(',', $columns);
    $stmt = $pdo->query("SELECT $columnList FROM $tableName");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Initialize PDF
    $pdf = new PDF($title); // Pass the title to the PDF constructor
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 12);

    // Calculate column widths dynamically
    $colWidth = $pdf->GetPageWidth() / count($columns) - 10; // Adjust width for margins
    $colWidths = array_fill(0, count($columns), $colWidth);
    $totalWidth = array_sum($colWidths);
    $xMargin = ($pdf->GetPageWidth() - $totalWidth) / 2;

    // Add table headers
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetX($xMargin); // Center the table
    foreach ($columns as $column) {
        $pdf->Cell($colWidth, 10, ucfirst($column), 1, 0, 'C');
    }
    $pdf->Ln();

    // Add table rows
    $pdf->SetFont('Arial', '', 10);
    foreach ($data as $row) {
        $pdf->SetX($xMargin); // Center each row
        foreach ($columns as $column) {
            $pdf->Cell($colWidth, 10, $row[$column], 1, 0, 'C');
        }
        $pdf->Ln();
    }

    // Output PDF
    $pdf->Output('D', $tableName . '_report.pdf');
}

// Call the function with table name, title, and optional columns
if (isset($_GET['table'])) {
    $table = $_GET['table'];
    switch ($table) {
        case 'caretakers':
            generatePDF(strtolower($table), ucfirst($table) . ' Report', ['id_number', 'names', "phone"]);
            header("Location: admin/caretakers");
            break;
        case 'apartments':
            generatePDF(strtolower($table), ucfirst($table) . ' Report', ['name', 'location', "rooms", "vacant"]);
            header("Location: admin/apartments");
            break;
        case 'tenants':
            generatePDF(strtolower($table), ucfirst($table) . ' Report', ['id_number', 'names', "phone"]);
            header("Location: admin/tenants");
            break;

        default:
            # code...
            break;
    }
}
