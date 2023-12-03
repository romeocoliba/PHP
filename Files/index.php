<!DOCTYPE html>
<html>
<head>
    <title>Upload & Download Files</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        header {
            background-color: #345995;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .upload-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .upload-section h2 {
            color: #345995;
        }
        .download-section {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        .download-section h2 {
            color: #345995;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            text-decoration: none;
            color: #345995;
        }
        a:hover {
            text-decoration: underline;
        }

.upload-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.file-label {
    font-size: 18px;
    color: #333;
}

.file-input {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.submit-button {
    padding: 10px 20px;
    background-color: #345995;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.submit-button:hover {
    background-color: #49657b;
}

    </style>
</head>
<body>
    <header>
        <h1>Upload & Download Files</h1>
    </header>
    <div class="container">
        <div class="upload-section">
            <h2>Upload Files</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
            <label for="fileToUpload" class="file-label">Select a PDF file (max 1MB):</label><br>
            <input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf" class="file-input" /><br><br>
            <input type="submit" value="Upload File" name="submit" class="submit-button">
    </form>
        </div>

        <div class="download-section">
            <h2>Download Files</h2>
            <ul>
                <?php include 'list_files.php'; ?>
            </ul>
        </div>
    </div>
</body>
</html>
