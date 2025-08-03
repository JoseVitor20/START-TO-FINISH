@foreach([
    'O contratado se obriga a prestar os serviços conforme descrito no documento X',
    'O pagamento será realizado em até 30 dias após a aprovação dos serviços',
    'Este contrato tem validade de 12 meses a partir da data de aceitação',
    'As partes elegem o foro da comarca de São Paulo para dirimir quaisquer dúvidas'
] as $clause)
<div class="clause">
    <strong>Cláusula {{ $loop->iteration }}:</strong> {{ $clause }}
</div>
@endforeach