<?php
require_once("../functions.php");
// Ensure FPDF is loaded via Composer
require dirname(__DIR__) . './../vendor/autoload.php';
// Use the FPDF class from the namespace
use Fpdf\Fpdf;

class Download extends Apartments
{
    public function printApartments()
    {
        // Start output buffering to prevent any premature output
        ob_start();
        // Create a new PDF instance
        $pdf = new Fpdf(); // Instantiate the FPDF object
        $pdf->AddPage();
        
        // Assuming this is your data retrieval function
        $apartments = $this->getAparts(); // Use $this-> if it's a method inside the class
        echo $apartments;
        die;
        // Set font for the document
        $pdf->SetFont('Arial', 'B', 16);

        // Add a centered image at the top
        $imagePath = dirname(__FILE__) . '/../images/logo.jpg'; // Update with your image path
        $pdf->Image($imagePath, ($pdf->GetPageWidth() - 50) / 2, 10, 50); // Center image horizontally, 50 width

        // Move to next line after the image
        $pdf->Ln(50); // Adjust the value depending on your image height

        // Add a title
        $pdf->Cell(0, 10, 'Apartment List', 0, 1, 'C'); // Centered title

        // Set font for table content
        $pdf->SetFont('Arial', '', 12);

        // Column headings
        $header = ['Name', 'Location', 'Caretaker', 'Rooms', 'Vacant'];

        // Set header background color
        $pdf->SetFillColor(200, 220, 255);
        $pdf->SetTextColor(0); // Text color (black)

        // Set column widths
        $widths = [30, 40, 30, 20, 20];
        for ($i = 0; $i < count($header); $i++) {
            $pdf->Cell($widths[$i], 10, $header[$i], 1, 0, 'C', true);
        }
        $pdf->Ln();

        // Display apartment data
        $pdf->SetFillColor(240, 240, 240); // Alternating row color
        $fill = false;

        foreach ($apartments as $apart) {
            $pdf->Cell($widths[0], 12, $apart['name'], 1, 0, 'C', $fill);
            $pdf->Cell($widths[1], 12, $apart['location'], 1, 0, 'C', $fill);
            $pdf->Cell($widths[2], 12, $apart['caretaker'] ? $apart['caretaker'] : "N/A", 1, 0, 'C', $fill);
            $pdf->Cell($widths[3], 12, $apart['rooms'], 1, 0, 'C', $fill);
            $pdf->Cell($widths[4], 12, $apart['vacant'], 1, 1, 'C', $fill);
            $fill = !$fill; // Alternate row color
        }

        // Clear output buffer before sending the PDF to the browser
        ob_end_clean();

        // Output the PDF to the browser (or save it)
        return $pdf->Output('D', 'apartments.pdf'); // Change 'D' to 'I' for inline display
    }
}
if (isset($_POST['pdf'])) {
    $pdf = $_POST['pdf'];
    $downloadApartments = new Download;
    $downloadApartments->printApartments();
}
