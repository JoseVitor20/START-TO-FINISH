<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Contrato de Serviço</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; }
        .content { margin: 20px 0; line-height: 1.6; }
        .signature { margin-top: 50px; }
        .footer { margin-top: 100px; font-size: 0.8em; text-align: center; }
    </style>
</head>
<body>
    <div class="header">
        <h1>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</h1>
    </div>
    
    <div class="content">
        <p>Entre as partes:</p>
        <p><strong>{{ $user->name }}</strong>, doravante denominado CONTRATANTE,</p>
        <p>e [Nome da Sua Empresa], doravante denominado CONTRATADO.</p>
        
        <ul>
            <li>{{Auth::user()->name}}</li>
            <li>{{Auth::user()->email}}</li>
            <li>{{Auth::user()->document}}</li>
            <li>{{Auth::user()->address}}</li>
        </ul>

        <h2>CLÁUSULAS</h2>
        
        <p>1. {{ $terms }}</p>
        <!-- Adicione mais cláusulas conforme necessário -->
    </div>
    
    <div class="signature">
        <p>Assinado eletronicamente em {{ $date }}</p>
        <p>_________________________________________</p>
        <p>Assinatura do Contratante</p>
    </div>
</body>
</html>