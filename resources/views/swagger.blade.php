<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>ServiceDesk Service Swagger</title>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swagger-ui-dist@3.23.11/swagger-ui.css">


</head>

<body>

    <div id="swagger-ui"></div>

    <script src="https://unpkg.com/swagger-ui-dist@3.23.11/swagger-ui-standalone-preset.js"></script>
    <script src="https://unpkg.com/swagger-ui-dist@3.23.11/swagger-ui-bundle.js"></script>

    <script>
        window.onload = function() {
            // Build a system
            const ui = SwaggerUIBundle({
                url: "/doc.yaml",
                dom_id: '#swagger-ui',
                deepLinking: true,
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIStandalonePreset
                ],
                plugins: [
                    SwaggerUIBundle.plugins.DownloadUrl
                ],
                layout: "StandaloneLayout",
            })
            window.ui = ui
        }
    </script>
</body>

</html>
