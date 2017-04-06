  function save(){
    var textareaList = document.getElementsByTagName("textarea");
    var files = {};
      var textarea = textareaList[0];
      var fileName = textarea.id + ".ino";
      var fileContent = textarea.value;
      files[fileName] = fileContent;
 
    var zipFileName = document.getElementById("zipName").value;
    if (zipFileName === "") {zipFileName = "my_file.zip";}
 
    createZip(files, zipFileName, saveBlobToFile);
  }
 
  function createZip(files, zipFileName, callback){
    // Create an instance of JSZip
    var zip = new JSZip();
    // Add files to the ZIP file
      zip.file(file, files[file]);
    // Generate the zip file
    var blob = zip.generate({type:"blob"});
 
    // Save the ZIP file
    callback(blob, zipFileName);
  }
 
  function saveBlobToFile(blob, fileName){
    // for Internet Explorer
    if ( /Trident\/|Edge\//.test(window.navigator.userAgent) ) {
      window.navigator.msSaveOrOpenBlob(blob, fileName);
 
    // for Firefox, Chrome, Opera
    } else {
      // Create a new link element to help save the Blob as a file
      var fileLink = document.createElement("a");
      // Add to the link the "download" attribute with the file name value
      fileLink.download = fileName;
      // Create and add a URL to the link "href" attribute for the Blob
      fileLink.href = window.URL.createObjectURL(blob);
      // Add the link element to the DOM
      document.body.appendChild(fileLink);
      // Simulate a click
      fileLink.click();
      // Remove the link element from the DOM
      fileLink.remove();
    }
  }