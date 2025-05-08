<?php include 'header.php'; ?>

<body class="bg-gray-50 text-gray-800">
  <div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <section class="hero-gradient text-white py-16 md:py-24 relative">
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
            <input type="file" id="file-input" class="hidden" accept=".csv,.pdf">
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
                  d="M3 5C3 3.34315 4.34315 2 6 2H18C19.6569 2 21 3.34315 21 5V19C21 20.6569 19.6569 22 18 22H6C5.44772 22 5 21.5523 5 21V5C5 4.44772 5.44772 4 6 4ZM6 4H18C18.5523 4 19 4.44772 19 5V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4Z"
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
                <path d="M17 14H7V12H17V14Z" fill="currentColor" />
                <path d="M7 10H11V8H7V10Z" fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M6 2C4.34315 2 3 3.34315 3 5V19C3 20.6569 4.34315 22 6 22H18C19.6569 22 21 20.6569 21 19V9C21 5.13401 17.866 2 14 2H6ZM6 4H13V9H19V19C19 19.5523 18.5523 20 18 20H6C5.44772 20 5 19.5523 5 19V5C5 4.44772 5.44772 4 6 4ZM15 4.10002C16.6113 4.4271 17.9413 5.52906 18.584 7H15V4.10002Z"
                  fill="currentColor" />
              </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">PDF</h3>
            <p class="text-gray-600 mb-4">Convert PDFs to editable formats or create PDFs from various document types.
            </p>
            <span class="text-red-500 font-medium inline-flex items-center">
              Learn More
              <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script>
      // Initialize variables
      const tabButtons = document.querySelectorAll('.tab-button');
      const fileInput = document.getElementById('file-input');
      const fileName = document.getElementById('file-name');
      const convertButton = document.getElementById('convert-button');
      const feedbackMessage = document.getElementById('feedback-message');
      const dropZone = document.getElementById('drop-zone');
      const conversionOptions = document.getElementById('conversion-options');
      const includeHeaders = document.getElementById('include-headers');
      const formatTable = document.getElementById('format-table');
      const progressContainer = document.getElementById('progress-container');
      const progressBar = document.getElementById('progress-bar');
      const progressPercent = document.getElementById('progress-percent');

      let selectedFile = null;
      let currentMode = 'csv2pdf';

      // Progress update function
      function updateProgress(percent) {
        progressBar.style.width = percent + '%';
        progressPercent.textContent = percent + '%';
        if (percent >= 100) {
          setTimeout(() => {
            progressContainer.classList.add('hidden');
            progressBar.style.width = '0%';
            progressPercent.textContent = '0%';
          }, 1000);
        }
      }

      // Feedback message function
      function showFeedback(message, type = 'success') {
        feedbackMessage.textContent = message;
        feedbackMessage.className = `mt-4 text-center text-sm ${type === 'error' ? 'text-red-500' : 'text-green-500'}`;
        if (type === 'success') {
          convertButton.disabled = false;
        }
      }

      // CSV to PDF conversion
      async function convertCsvToPdf(file) {
        try {
          convertButton.disabled = true;
          progressContainer.classList.remove('hidden');
          updateProgress(10);

          // Read CSV content
          const text = await file.text();
          updateProgress(20);

          // Parse CSV data
          const rows = text.split('\n').map(row => row.split(','));
          updateProgress(40);

          // Create PDF document
          const { jsPDF } = window.jspdf;
          const doc = new jsPDF();
          
          // Set document properties
          doc.setProperties({
            title: file.name.replace(/\.[^/.]+$/, ""),
            subject: 'Converted CSV to PDF',
            author: 'PDFSavvy Converter',
            creator: 'PDFSavvy Web Converter'
          });

          updateProgress(60);

          // Add table headers
          if (includeHeaders.checked) {
            doc.setFontSize(12);
            doc.setFont('helvetica', 'bold');
            rows[0].forEach((header, i) => {
              doc.text(header, 10 + i * 40, 20);
            });
            updateProgress(70);
          }

          // Add table data
          doc.setFontSize(10);
          doc.setFont('helvetica', 'normal');
          
          // Format as table if option is selected
          if (formatTable.checked) {
            doc.autoTable({
              head: [rows[0]],
              body: rows.slice(1),
              startY: includeHeaders.checked ? 25 : 20,
              styles: {
                cellPadding: 2,
                fontSize: 10,
                valign: 'middle',
                halign: 'center'
              },
              columnStyles: Object.fromEntries(
                rows[0].map((_, idx) => [idx, {
                  minCellWidth: 30
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
              }
            });
          } else {
            // Simple text layout
            rows.forEach((row, rowIndex) => {
              if (rowIndex === 0 && !includeHeaders.checked) return;
              
              let yPos = 20 + (rowIndex * 10);
              if (yPos > 280) {
                doc.addPage();
                yPos = 20;
              }
              
              row.forEach((cell, cellIndex) => {
                doc.text(cell, 10 + cellIndex * 40, yPos);
              });
            });
          }

          updateProgress(90);

          // Save PDF
          doc.save(file.name.replace(/\.[^/.]+$/, "") + '.pdf');
          showFeedback('Conversion successful! File downloaded');

        } catch (error) {
          console.error('Conversion error:', error);
          showFeedback(`Error: ${error.message}`, 'error');
        } finally {
          convertButton.disabled = false;
          updateProgress(0);
        }
      }

      // PDF to CSV conversion
      async function convertPdfToCsv(file) {
        try {
          convertButton.disabled = true;
          updateProgress(10);

          // Read PDF content
          const pdfData = await file.arrayBuffer();
          updateProgress(20);

          // Load PDF document
          const loadingTask = pdfjsLib.getDocument({ data: pdfData });
          const pdf = await loadingTask.promise;
          updateProgress(40);

          // Extract text from all pages
          let csvContent = [];
          for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
            const page = await pdf.getPage(pageNum);
            const viewport = page.getViewport({ scale: 1.5 });
            const textContent = await page.getTextContent();
            
            // Convert text items to strings
            const pageText = textContent.items.map(item => item.str).join(' ');
            csvContent.push(pageText);
            updateProgress(40 + (pageNum / pdf.numPages * 40));
          }

          // Format as CSV
          const csvRows = csvContent.map((text, i) => `"Page ${i+1}","${text.replace(/"/g, '""')}"`);
          const csv = ["\"Page Number\",\"Content\"", ...csvRows].join('\n');
          updateProgress(90);

          // Create and save CSV file
          const blob = new Blob([csv], { type: 'text/csv' });
          saveAs(blob, file.name.replace(/\.[^/.]+$/, "") + '.csv');
          showFeedback('Conversion successful! File downloaded');

        } catch (error) {
          console.error('Conversion error:', error);
          showFeedback(`Error: ${error.message || 'Failed to process PDF'}`, 'error');
        } finally {
          convertButton.disabled = false;
          updateProgress(0);
        }
      }

      // File validation
      function validateFile() {
        if (!selectedFile) {
          convertButton.disabled = true;
          return false;
        }

        // File type validation
        const fileName = selectedFile.name.toLowerCase();
        const isCsvFile = fileName.endsWith('.csv');
        const isPdfFile = fileName.endsWith('.pdf');

        const isValidType = (currentMode === 'csv2pdf' && isCsvFile) || 
                           (currentMode === 'pdf2csv' && isPdfFile);

        if (!isValidType) {
          showFeedback(`Invalid file type for ${currentMode.toUpperCase()} conversion`, 'error');
          convertButton.disabled = true;
          return false;
        }

        // File size validation (10MB limit)
        if (selectedFile.size > 10 * 1024 * 1024) {
          showFeedback('File size exceeds 10MB limit', 'error');
          convertButton.disabled = true;
          return false;
        }

        convertButton.disabled = false;
        return true;
      }

      // Event listeners
      document.addEventListener('DOMContentLoaded', () => {
        // Initialize tab states
        tabButtons.forEach(button => {
          if (button.dataset.mode === currentMode) {
            button.classList.add('active');
          }
        });
        conversionOptions.style.display = currentMode === 'csv2pdf' ? 'block' : 'none';
      });

      // Tab switching
      tabButtons.forEach(button => {
        button.addEventListener('click', () => {
          // Remove active class from all buttons
          tabButtons.forEach(b => b.classList.remove('active'));
          // Add active class to clicked button
          button.classList.add('active');
          currentMode = button.dataset.mode;
          
          // Update file input accept attribute
          fileInput.accept = currentMode === 'csv2pdf' ? '.csv' : '.pdf';
          
          // Toggle conversion options
          conversionOptions.style.display = currentMode === 'csv2pdf' ? 'block' : 'none';
          
          // Reset file selection and UI
          selectedFile = null;
          fileInput.value = ''; // Clear file input
          fileName.textContent = 'No file selected';
          convertButton.disabled = true;
          feedbackMessage.textContent = '';
        });
      });

      // File input handling
      fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 1) {
          showFeedback('Only single file upload supported', 'error');
          return;
        }
        selectedFile = e.target.files[0];
        fileName.textContent = selectedFile.name;
        validateFile();
      });

      // Drag and drop handling
      dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('active');

        if (e.dataTransfer.files.length > 1) {
          showFeedback('Only single file upload supported', 'error');
          return;
        }

        selectedFile = e.dataTransfer.files[0];
        fileName.textContent = selectedFile.name;
        validateFile();
      });

      // Drag over effect
      dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('active');
      });

      // Drag leave effect
      dropZone.addEventListener('dragleave', (e) => {
        e.preventDefault();
        dropZone.classList.remove('active');
      });

      // Convert button handler
      convertButton.addEventListener('click', () => {
        if (!selectedFile) {
          return showFeedback('Please select a file', 'error');
        }

        // Re-validate file before conversion
        if (!validateFile()) {
          return;
        }

        if (currentMode === 'csv2pdf') {
          convertCsvToPdf(selectedFile);
        } else {
          convertPdfToCsv(selectedFile);
        }
      });
    </script>
  </body>
</html>
