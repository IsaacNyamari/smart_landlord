<?php
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

function downloadCSV($tableName, $columns = [])
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

    // Set headers to prompt file download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $tableName . '_report.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');

    // Open output stream
    $output = fopen('php://output', 'w');

    // Add CSV header row (column names)
    fputcsv($output, $columns);

    // Add CSV data rows
    foreach ($data as $row) {
        fputcsv($output, $row);
    }

    // Close the output stream
    fclose($output);
}

// Call the function with table name and optional columns
if (isset($_GET['table'])) {
    $table = $_GET['table'];
    switch ($table) {
        case 'caretakers':
            downloadCSV(strtolower($table), ['id_number', 'names', 'phone']);
            break;
        case 'apartments':
            downloadCSV(strtolower($table), ['name', 'location', 'rooms', 'vacant']);
            break;
        case 'tenants':
            downloadCSV(strtolower($table), ['id_number', 'names', 'phone']);
            break;
        default:
            die("Error: Table '$table' not supported.");
    }
}
