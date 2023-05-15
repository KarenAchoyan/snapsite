<!DOCTYPE html>
<html>
<head>
    <title>Template Viewer</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .template-container {
            width: 80%;
            margin: auto;
        }
        .template{
            width: 100%;
        }

    </style>
</head>
<body>
<div class="template-container">
    <img class="template" id="template-image" src="{{ asset($template->file) }}" alt="Template Image">
</div>
</body>
</html>
