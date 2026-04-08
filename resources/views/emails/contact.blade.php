<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #002B5C 0%, #001a3a 100%);
            color: #ffffff;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 30px 20px;
        }
        .field {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .field:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #002B5C;
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            text-transform: uppercase;
        }
        .value {
            color: #555;
            font-size: 16px;
        }
        .message-box {
            background: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #002B5C;
            border-radius: 4px;
            margin-top: 10px;
        }
        .footer {
            background: #f4f4f4;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
        .footer a {
            color: #002B5C;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 Nuevo Mensaje de Contacto</h1>
            <p style="margin: 10px 0 0 0; opacity: 0.9;">Strategal Servicios Legales</p>
        </div>

        <div class="content">
            <p style="margin-top: 0; font-size: 16px; color: #555;">
                Has recibido un nuevo mensaje desde el formulario de contacto del sitio web.
            </p>

            <div class="field">
                <span class="label">Nombre Completo</span>
                <span class="value">{{ $contactData['name'] }}</span>
            </div>

            <div class="field">
                <span class="label">Email</span>
                <span class="value">
                    <a href="mailto:{{ $contactData['email'] }}" style="color: #002B5C; text-decoration: none;">
                        {{ $contactData['email'] }}
                    </a>
                </span>
            </div>

            <div class="field">
                <span class="label">Teléfono</span>
                <span class="value">
                    <a href="tel:{{ $contactData['phone'] }}" style="color: #002B5C; text-decoration: none;">
                        {{ $contactData['phone'] }}
                    </a>
                </span>
            </div>

            <div class="field">
                <span class="label">Área de Interés</span>
                <span class="value">
                    @php
                        $services = [
                            'administrativo' => 'Derecho Administrativo',
                            'corporativo' => 'Derecho Corporativo',
                            'laboral' => 'Derecho Laboral',
                            'fiscal' => 'Derecho Fiscal',
                            'propiedad' => 'Propiedad Intelectual',
                            'familiar' => 'Derecho Familiar, Civil y Mercantil',
                            'otro' => 'Otro'
                        ];
                    @endphp
                    {{ $services[$contactData['service']] ?? $contactData['service'] }}
                </span>
            </div>

            <div class="field">
                <span class="label">Mensaje</span>
                <div class="message-box">
                    {{ $contactData['message'] }}
                </div>
            </div>

            <div style="margin-top: 30px; padding: 20px; background: #e8f4f8; border-radius: 8px; text-align: center;">
                <p style="margin: 0; color: #002B5C; font-weight: bold;">
                    💡 Responde a este correo para contactar directamente al cliente
                </p>
            </div>
        </div>

        <div class="footer">
            <p style="margin: 0 0 10px 0;">
                <strong>Strategal Servicios Legales</strong><br>
                Puerto de Todos los Santos 162, Monumental<br>
                Guadalajara, Jalisco
            </p>
            <p style="margin: 10px 0 0 0;">
                <a href="tel:3324043589">33 24 04 35 89</a> |
                <a href="mailto:contacto@strategalsl.com">contacto@strategalsl.com</a> |
                <a href="https://www.strategalsl.com">www.strategalsl.com</a>
            </p>
        </div>
    </div>
</body>
</html>
