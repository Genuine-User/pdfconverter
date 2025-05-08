<?php include 'header.php'; ?>

<body class="bg-gray-50 text-gray-800">
  <div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <section class="hero-gradient text-white py-16 md:py-24 relative">
      <div class="hero-pattern absolute inset-0"></div>
      <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
          <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
              Convert CSV ↔ PDF with<br>
              <span class="text-indigo-400">Seamless Precision</span>
            </h1>
            <p class="text-xl text-gray-300 mb-8 max-w-lg">
              Reliable CSV and PDF conversion with data integrity, layout accuracy, and comprehensive formatting.
            </p>
          </div>
          <div class="md:w-1/2 flex justify-center">
            <div class="relative">
              <svg class="w-80 h-80 neon-glow" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15" y="10" width="90" height="100" rx="4" fill="#1E293B" stroke="#818CF8" stroke-width="2" />
                <rect x="25" y="20" width="70" height="10" rx="2" fill="#4F46E5" opacity="0.7" />
                <rect x="25" y="35" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="45" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="55" width="70" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="65" width="40" height="5" rx="1" fill="#818CF8" opacity="0.5" />
                <rect x="25" y="80" width="30" height="20" rx="2" fill="#4F46E5" opacity="0.3" />
                <rect x="65" y="80" width="30" height="20" rx="2" fill="#4F46E5" opacity="0.3" />
                <path d="M35 20H55V30H35V20Z" fill="#4F46E5" />
                <text x="38" y="27" fill="white" font-size="8" font-family="Arial, sans-serif"
                  font-weight="bold">CSV</text>
                <g class="animate-pulse">
                  <path d="M90 65L85 60L80 65" stroke="#10B981" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <path d="M85 60V75" stroke="#10B981" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </g>
                <circle cx="85" cy="40" r="10" fill="#6366F1" opacity="0.2" stroke="#6366F1" stroke-width="1" />
                <path d="M80 40L85 45L90 40" stroke="#6366F1" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Converter Section -->
    <section id="converter" class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto converter-card rounded-2xl p-8 shadow-xl">
          <!-- Tabs -->
          <div class="flex mb-8 border-b border-gray-200">
            <button class="tab-button px-6 py-3 font-medium border-b-2 border-transparent active" data-mode="csv2pdf">
              CSV to PDF
            </button>
            <button class="tab-button px-6 py-3 font-medium border-b-2 border-transparent" data-mode="pdf2csv">
              PDF to CSV
            </button>
          </div>

          <!-- File Upload -->
          <div id="drop-zone" class="drop-zone rounded-xl p-8 text-center mb-6 cursor-pointer">
            <div class="mb-4 text-indigo-500">
              <svg class="w-12 h-12 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
              </svg>
            </div>
            <p class="text-lg font-medium mb-2">Drag & Drop Files Here</p>
            <p class="text-gray-600 mb-4">or click to browse your files</p>
            <input type="file" id="file-input" class="hidden" accept=".csv">
            <p id="file-name" class="text-sm text-gray-500 mt-4">No file selected</p>
          </div>

          <!-- Conversion Options -->
          <div id="conversion-options" class="space-y-4 mb-8">
            <div class="flex items-center space-x-3">
              <input type="checkbox" id="include-headers" class="rounded text-indigo-600" checked>
              <label for="include-headers" class="text-gray-700">Include CSV headers</label>
            </div>
            <div class="flex items-center space-x-3">
              <input type="checkbox" id="format-table" class="rounded text-indigo-600" checked>
              <label for="format-table" class="text-gray-700">Format as PDF table</label>
            </div>
          </div>

          <!-- Progress Bar -->
          <div id="progress-container" class="hidden mb-8">
            <div class="flex justify-between mb-1">
              <span class="text-sm font-medium text-indigo-700">Converting...</span>
              <span id="progress-percent" class="text-sm font-medium text-indigo-700">0%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
              <div id="progress-bar" class="bg-indigo-600 h-2.5 rounded-full" style="width: 0%"></div>
            </div>
          </div>

          <!-- Convert Button -->
          <button id="convert-button"
            class="btn-primary w-full py-3 rounded-lg font-medium text-white transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
            disabled>
            Convert Now
          </button>

          <!-- Feedback Message -->
          <div id="feedback-message" class="mt-4 text-center text-sm"></div>
        </div>
      </div>
    </section>

    <!-- Hidden form for file upload -->
    <form id="upload-form" enctype="multipart/form-data" class="hidden">
      <input type="file" id="server-file-input" name="csv_file" accept=".csv">
    </form>

    <!-- Format Cards Section -->
    <section id="formats" class="py-16 bg-gray-50">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Supported Formats</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">Convert between various document formats with high fidelity and
            precise formatting preservation.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">

          <!-- DOCX Format Card -->
          <a href="docx-conversion.php"
            class="format-card docx bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-indigo-600 flex justify-center">
              <svg class="w-16 h-16 neon-blue" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 18H17V16H7V18Z" fill="currentColor" />
                <path d="M17 14H7V12H17V14Z" fill="currentColor" />
                <path d="M7 10H11V8H7V10Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 5C3 3.34315 4.34315 2 6 2H14C17.866 2 21 5.13401 21 9V19C21 20.6569 19.6569 22 18 22H6C4.34315 22 3 20.6569 3 19V5ZM6 4H13V9H19C19 9 19 9 19 9V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">DOCX</h3>
            <p class="text-gray-600 mb-4">Microsoft Word documents with preserved formatting, images, and styles.</p>
            <span class="text-indigo-600 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- HTML Format Card -->
          <a href="html-conversion.php"
            class="format-card html bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-yellow-500 flex justify-center">
              <svg class="w-16 h-16 neon-yellow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 5.5V18.5H20V5.5H4ZM5.5 7H18.5V11.5H5.5V7ZM5.5 13H12V17H5.5V13ZM13.5 17V13H18.5V17H13.5Z"
                  fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 5.5C2 4.39543 2.89543 3.5 4 3.5H20C21.1046 3.5 22 4.39543 22 5.5V18.5C22 19.6046 21.1046 20.5 20 20.5H4C2.89543 20.5 2 19.6046 2 18.5V5.5ZM4 5.5H20V18.5H4V5.5Z"
                  fill="currentColor" />
                <path d="M9 9.5L7 8.5V10.5L9 9.5Z" fill="currentColor" />
                <path d="M15 9.5L17 8.5V10.5L15 9.5Z" fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">HTML</h3>
            <p class="text-gray-600 mb-4">Web-ready HTML files with CSS styling for web publishing or editing.</p>
            <span class="text-yellow-500 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- TXT Format Card -->
          <a href="txt-conversion.php"
            class="format-card txt bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-green-500 flex justify-center">
              <svg class="w-16 h-16 neon-green" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 18H17V16H7V18Z" fill="currentColor" />
                <path d="M17 14H7V12H17V14Z" fill="currentColor" />
                <path d="M7 10H17V8H7V10Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 5C3 3.34315 4.34315 2 6 2H18C19.6569 2 21 3.34315 21 5V19C21 20.6569 19.6569 22 18 22H6C5.44772 22 5 21.6569 5 21V5C5 4.44772 5.44772 4 6 4ZM6 4H18C18.5523 4 19 4.44772 19 5V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">TXT</h3>
            <p class="text-gray-600 mb-4">Simple text files for universal compatibility and easy editing.</p>
            <span class="text-green-500 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- CSV Format Card -->
          <a href="csv-conversion.php"
            class="format-card csv bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-purple-600 flex justify-center">
              <svg class="w-16 h-16 neon-purple" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 5H20V7H4V5Z" fill="currentColor" />
                <path d="M4 9H20V11H4V9Z" fill="currentColor" />
                <path d="M4 13H20V15H4V13Z" fill="currentColor" />
                <path d="M4 17H20V19H4V17Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 3C2 1.89543 2.89543 1 4 1H20C21.1046 1 22 1.89543 22 3V21C22 22.1046 21.1046 23 20 23H4C2.89543 23 2 22.1046 2 21V3ZM4 3H20V21H4V3Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">CSV</h3>
            <p class="text-gray-600 mb-4">Comma-separated values for data analysis and spreadsheet applications.</p>
            <span class="text-purple-600 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- XLSX Format Card -->
          <a href="xlsx-conversion.php"
            class="format-card xlsx bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-indigo-400 flex justify-center">
              <svg class="w-16 h-16 neon-glow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 4H8V8H4V4Z" fill="currentColor" />
                <path d="M4 10H8V14H4V10Z" fill="currentColor" />
                <path d="M8 16H4V20H8V16Z" fill="currentColor" />
                <path d="M10 4H14V8H10V4Z" fill="currentColor" />
                <path d="M14 10H10V14H14V10Z" fill="currentColor" />
                <path d="M10 16H14V20H10V16Z" fill="currentColor" />
                <path d="M20 4H16V8H20V4Z" fill="currentColor" />
                <path d="M16 10H20V14H16V10Z" fill="currentColor" />
                <path d="M20 16H16V20H20V16Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M2 2C2 0.89543 2.89543 0 4 0H20C21.1046 0 22 0.89543 22 2V22C22 23.1046 21.1046 24 20 24H4C2.89543 24 2 23.1046 2 22V2ZM4 2H20V22H4V2Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">XLSX</h3>
            <p class="text-gray-600 mb-4">Microsoft Excel spreadsheets with formulas, formatting, and multiple sheets.
            </p>
            <span class="text-indigo-400 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>

          <!-- PDF Format Card -->
          <a href="pdf-conversion.php"
            class="format-card pdf bg-white rounded-xl shadow-md hover:shadow-xl border-2 border-transparent p-6 text-center">
            <div class="mb-4 text-red-500 flex justify-center">
              <svg class="w-16 h-16 neon-red" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 18H17V16H7V18Z" fill="currentColor" />
                <path d="M17 14H7V12...s/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
  <script>
    // File upload handler for server-side processing
    async function handleFileUpload(file) {
      try {
        const formData = new FormData();
        formData.append('csv_file', file);
        
        // Show progress
        updateProgress(10);
        
        // Upload file to server
        const response = await fetch('csv-conversion.php', {
          method: 'POST',
          body: formData
        });
        
        updateProgress(40);
        
        if (!response.ok) {
          throw new Error('Server error: ' + response.statusText);
        }
        
        // Get processed data
        const result = await response.json();
        updateProgress(70);
        
        if (result.error) {
          throw new Error(result.error);
        }
        
        // Convert CSV data to PDF
        if (currentMode === 'csv2pdf') {
          await convertCsvToPdf(new File([result.data], file.name));
        } else {
          // PDF to CSV conversion would go here
          showFeedback('PDF to CSV conversion coming soon!', 'error');
        }
        
        updateProgress(100);
        convertButton.disabled = false;
        
      } catch (error) {
        console.error('Conversion error:', error);
        showFeedback('Conversion failed: ' + error.message, 'error');
        convertButton.disabled = false;
      }
    }

    // Read file as text
    function readFileAsText(file) {
      return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = (e) => resolve(e.target.result);
        reader.onerror = (e) => reject(e.target.error);
        reader.readAsText(file);
      });
    }

    // CSV to PDF conversion
    // Set PDF.js worker path
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@3.4.120/build/pdf.worker.min.js';

    // Initialize variables
    let currentMode = 'csv2pdf';
    let selectedFile = null;

    // DOM Elements
    const fileInput = document.getElementById('file-input');
    const dropZone = document.getElementById('drop-zone');
    const fileName = document.getElementById('file-name');
    const convertButton = document.getElementById('convert-button');
    const progressContainer = document.getElementById('progress-container');
    const progressBar = document.getElementById('progress-bar');
    const progressPercent = document.getElementById('progress-percent');
    const feedbackMessage = document.getElementById('feedback-message');
    const tabButtons = document.querySelectorAll('.tab-button');
    const includeHeaders = document.getElementById('include-headers');
    const formatTable = document.getElementById('format-table');
    const conversionOptions = document.getElementById('conversion-options');

    // Helper function to update progress
    function updateProgress(percent) {
      progressContainer.classList.remove('hidden');
      progressBar.style.width = percent + '%';
      progressPercent.textContent = percent + '%';
      if (percent >= 100) {
        setTimeout(() => {
          progressContainer.classList.add('hidden');
        }, 1000);
      }
    }

    // Helper function to show feedback message
    function showFeedback(message, type = 'success') {
      feedbackMessage.textContent = message;
      feedbackMessage.className = 'mt-4 text-center text-sm';
      feedbackMessage.classList.add(type === 'error' ? 'text-red-600' : 'text-green-600');
      setTimeout(() => {
        feedbackMessage.textContent = '';
      }, 5000);
    }

    // CSV to PDF conversion
    async function convertCsvToPdf(file) {
      try {
        convertButton.disabled = true;
        updateProgress(10);

        const text = await readFileAsText(file);
        updateProgress(30);

        const results = Papa.parse(text, {
          header: includeHeaders.checked,
          skipEmptyLines: true,
          dynamicTyping: true,
          delimiter: ',', // Explicitly set delimiter
          quoteChar: '"',
          escapeChar: '"'
        });

        if (results.errors.length > 0) {
          throw new Error('CSV parsing error: ' + results.errors[0].message);
        }

        const doc = new jsPDF({
          orientation: 'landscape',
          unit: 'mm',
          format: 'a4'
        });

        const headers = includeHeaders.checked ? results.meta.fields : 
          Array.from({ length: results.data[0].length }, (_, i) => `Column ${i + 1}`);
        
        const data = includeHeaders.checked ? results.data : 
          results.data.map(row => Object.values(row));

        // Auto-size columns with improved calculation
        const colWidths = headers.map((header, idx) => {
          const headerWidth = doc.getTextWidth(header) * 1.2;
          let dataWidth = 0;
          
          // Handle empty data case
          if (data.length > 0) {
            dataWidth = Math.max(...data.map(row => {
              const cellText = String(row[idx] || '');
              return doc.getTextWidth(cellText) * 1.2;
            }));
          }
          
          return Math.max(headerWidth, dataWidth) + 4;
        });

        // Table formatting
        if (formatTable.checked) {
          // Add document metadata
          doc.setFontSize(12);
          doc.setTextColor(40);
          doc.setFont('helvetica', 'normal');
          
          // Add header
          doc.setFontSize(16);
          doc.setFont('helvetica', 'bold');
          doc.text('CSV to PDF Conversion', 14, 15);
          doc.setFontSize(10);
          doc.setFont('helvetica', 'italic');
          doc.text('Generated by SavvyPDF', 14, 20);
          doc.setFont('helvetica', 'normal');
          doc.setDrawColor(200, 200, 200);
          doc.line(14, 22, 270, 22);
          
          // Add table
          doc.autoTable({
            head: [headers],
            body: data,
            startY: 20,
            styles: {
              cellPadding: 2,
              fontSize: 10,
              valign: 'middle',
              halign: 'center'
            },
            columnStyles: Object.fromEntries(
              headers.map((_, idx) => [idx, { 
                minCellWidth: colWidths[idx]
              }])
            ),
            theme: 'grid',
            headStyles: {
              fillColor: [75, 85, 101],
              textColor: [255, 255, 255],
              fontSize: 11,
              fontStyle: 'bold'
            },
            alternateRowStyles: {
              fillColor: [241, 245, 249]
            },
            margin: { top: 30 }
          });
        } else {
          // Add document metadata
          doc.setFontSize(12);
          doc.setTextColor(40);
          doc.setFont('helvetica', 'normal');
          
          // Add header
          doc.setFontSize(16);
          doc.setFont('helvetica', 'bold');
          doc.text('CSV to PDF Conversion', 14, 15);
          doc.setFontSize(10);
          doc.setFont('helvetica', 'italic');
          doc.text('Generated by SavvyPDF', 14, 20);
          doc.setFont('helvetica', 'normal');
          doc.setDrawColor(200, 200, 200);
          doc.line(14, 22, 270, 22);
          
          let yPos = 20;
          headers.forEach((header, idx) => {
            doc.text(header, 10 + colWidths.slice(0, idx).reduce((a, b) => a + b, 0), yPos);
          });
          yPos += 10;

          data.forEach((row, rowIndex) => {
            let xPos = 10;
            let maxHeight = 10;

            row.forEach((cell, idx) => {
              const textLines = doc.splitTextToSize(String(cell), colWidths[idx] - 2);
              doc.text(textLines, xPos, yPos);
              maxHeight = Math.max(maxHeight, textLines.length * 10);
              xPos += colWidths[idx];
            });

            yPos += maxHeight;
            if (yPos > doc.internal.pageSize.height - 20) {
              doc.addPage();
              yPos = 20;
              
              // Add headers to new page if needed
              if (includeHeaders.checked && formatTable.checked) {
                headers.forEach((header, idx) => {
                  doc.text(header, 10 + colWidths.slice(0, idx).reduce((a, b) => a + b, 0), yPos);
                });
                yPos += 10;
              }
            }
          });
        }
        
        // Save the PDF
        doc.save(file.name.replace('.csv', '.pdf'));
        showFeedback('Conversion completed successfully!', 'success');
      } catch (error) {
        throw error;
      }
    }

    // Event Listeners
    document.addEventListener('DOMContentLoaded', () => {
      // Tab switching
      document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
          document.querySelector('.tab-button.active').classList.remove('active');
          button.classList.add('active');
          currentMode = button.dataset.mode;
          
          // Update UI based on mode
          if (currentMode === 'csv2pdf') {
            document.querySelector('h1').innerHTML = 'Convert CSV → PDF<br><span class="text-indigo-400">Seamless Precision</span>';
            document.querySelector('#file-input').accept = '.csv';
            document.querySelector('#file-name').textContent = 'No CSV file selected';
          } else {
            document.querySelector('h1').innerHTML = 'Convert PDF → CSV<br><span class="text-indigo-400">Data Extraction</span>';
            document.querySelector('#file-input').accept = '.pdf';
            document.querySelector('#file-name').textContent = 'No PDF file selected';
          }
          
          // Reset UI
          selectedFile = null;
          convertButton.disabled = true;
          fileName.textContent = 'No file selected';
          feedbackMessage.textContent = '';
        });
      });

      // File input change
      fileInput.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file) {
          selectedFile = file;
          fileName.textContent = file.name;
          convertButton.disabled = false;
          feedbackMessage.textContent = '';
        }
      });

      // Drop zone functionality
      dropZone.addEventListener('click', () => fileInput.click());
      
      dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('bg-gray-100');
      });
      
      dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('bg-gray-100');
      });
      
      dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('bg-gray-100');
        
        const file = e.dataTransfer.files[0];
        if (file) {
          if ((currentMode === 'csv2pdf' && file.name.endsWith('.csv')) || 
              (currentMode === 'pdf2csv' && file.name.endsWith('.pdf'))) {
            selectedFile = file;
            fileName.textContent = file.name;
            convertButton.disabled = false;
            feedbackMessage.textContent = '';
          } else {
            showFeedback(`Please select a ${currentMode === 'csv2pdf' ? 'CSV' : 'PDF'} file`, 'error');
          }
        }
      });

      // Convert button click
      convertButton.addEventListener('click', () => {
        if (selectedFile) {
          if (currentMode === 'csv2pdf') {
            handleFileUpload(selectedFile);
          } else {
            // PDF to CSV conversion logic would go here
            showFeedback('PDF to CSV conversion coming soon!', 'error');
          }
        }
      });
    });
  </script>
</body>
</html>
