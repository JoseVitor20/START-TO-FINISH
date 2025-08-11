<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contrato de Prestação de Serviços</title>
  <style>
    @page {
      margin: 2.5cm;
    }
    body {
      font-family: 'Times New Roman', Times, serif;
      font-size: 11pt;
      line-height: 1.6;
      color: #333;
    }
    .header {
      text-align: center;
      margin-bottom: 50px;
      line-height: 1.2;
    }
    .header h1 {
      font-family: 'Arial', sans-serif;
      font-size: 20pt;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
      color: #1a1a1a;
      border-bottom: 2px solid #ccc;
      padding-bottom: 10px;
    }
    .header p {
      margin: 5px 0 0 0;
      font-size: 10pt;
      font-family: 'Arial', sans-serif;
      color: #555;
    }
    h2 {
      font-family: 'Arial', sans-serif;
      font-size: 12pt;
      font-weight: bold;
      margin-top: 30px;
      margin-bottom: 15px;
      text-transform: uppercase;
      color: #1a1a1a;
      border-bottom: 1px solid #ddd;
      padding-bottom: 5px;
    }
    h3 {
      font-size: 11pt;
      font-weight: bold;
      margin-top: 25px;
      margin-bottom: 5px;
    }
    p {
      text-align: justify;
      margin-bottom: 1em;
    }
    ul {
      padding-left: 20px;
      margin-bottom: 1em;
    }
    li {
      margin-bottom: 0.5em;
    }
    .bold {
      font-weight: bold;
    }
    .signature-section {
      margin-top: 80px;
      text-align: center;
    }
    .signature-section p {
      margin: 0;
      text-align: center;
    }
    .signatures-container {
      margin-top: 60px;
      display: flex;
      justify-content: center;
      gap: 100px;
    }
    .signature-group {
      text-align: center;
      width: 250px;
    }
    .signature-line {
      display: block;
      width: 100%;
      border-top: 1px solid #000;
      margin: 15px 0 5px 0;
    }
    .signature-text p {
      font-size: 10pt;
      line-height: 1.3;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>Contrato de Prestação de Serviços</h1>
    <p>Contrato de Assinatura Mensal de Website</p>
  </div>

  <h2>DAS PARTES</h2>
  <p>
    <span class="bold">CONTRATADO:</span> START TO FINISH, pessoa jurídica de direito privado inscrita no CNPJ/CPF sob o nº 098.717.321-98, com sede na Rua Padre Aquiles Pio Redin, nº 150, Município de Dourados, Estado de Mato Grosso do Sul, doravante denominada <span class="bold">PRESTADOR DE SERVIÇOS</span>.
  </p>
  <p>
    <span class="bold">CONTRATANTE:</span> {{ $user->name }}, pessoa jurídica ou física, inscrito no CNPJ/CPF sob o nº {{ $user->document }}, com endereço em {{ $user->address }}, doravante denominado <span class="bold">CLIENTE</span>.
  </p>

  <h2>CONSIDERAÇÕES INICIAIS</h2>
  <p>
    O presente instrumento tem como objetivo estabelecer as condições para a prestação de serviços de assinatura mensal de website, que inclui a criação, manutenção, hospedagem e outros benefícios descritos abaixo.
  </p>

  <h3>CLÁUSULA 1 - OBJETO E BENEFÍCIOS DA ASSINATURA</h3>
  <p>
    <span class="bold">1.1. Objeto:</span> Este contrato tem por objeto a prestação de serviços de assinatura mensal, pela qual o CLIENTE terá acesso a um pacote de benefícios relacionados a um website, conforme o plano contratado.
  </p>
  <p>
    <span class="bold">1.2. Benefícios da Assinatura:</span> O CLIENTE, ao manter sua assinatura em dia, terá direito aos seguintes benefícios principais:
  </p>
  <ul>
    <li>Criação de Site Gratuita: A criação de um site é oferecida gratuitamente, conforme as especificações e limitações do plano de assinatura escolhido.</li>
    <li>A criação do site terá prioridade, desde que não haja outros em andamento.</li>
    <li>Manutenção Gratuita: O PRESTADOR DE SERVIÇOS realizará a manutenção técnica e de segurança do site com agendamento.</li>
    <li>Adição de Novo Conteúdo Gratuita: O PRESTADOR DE SERVIÇOS fará a adição de novos conteúdos fornecidos pelo CLIENTE com agendamento.</li>
    <li>Hospedagem Gratuita: O site será hospedado nos servidores do PRESTADOR DE SERVIÇOS.</li>
    <li>Domínio Gratuito: O domínio do site será gerenciado e mantido pelo PRESTADOR DE SERVIÇOS.</li>
  </ul>

  <h3>CLÁUSULA 2 - DAS OBRIGAÇÕES DO CLIENTE</h3>
  <p>
    <span class="bold">2.1. Agendamento:</span> O CLIENTE deverá solicitar a criação de site, adição de conteúdo ou qualquer outro serviço através de agendamento prévio, utilizando os canais de comunicação fornecidos pelo PRESTADOR DE SERVIÇOS (e.g., WhatsApp, e-mail, etc.).
  </p>
  <p>
    <span class="bold">2.2. Aviso Prévio:</span> Para qualquer alteração de plano (upgrade/downgrade) ou cancelamento da assinatura, o CLIENTE deverá notificar o PRESTADOR DE SERVIÇOS com, no mínimo, 7 dias de antecedência, para que a gestão dos agendamentos e das tarefas possa ser realizada de forma adequada.
  </p>
  <p>
    <span class="bold">2.3. Dados Cadastrais:</span> O CLIENTE é responsável por fornecer e manter atualizados seu CPF/CNPJ e endereço. A falta ou o fornecimento de informações incorretas poderá invalidar este contrato como prova judicial para fins de cobrança ou qualquer outro processo legal movido contra o PRESTADOR DE SERVIÇOS.
  </p>

  <h3>CLÁUSULA 3 - DAS CONDIÇÕES E RESTRIÇÕES</h3>
  <p>
    <span class="bold">3.1. Downgrade de Plano:</span> O CLIENTE que optar por um "downgrade" (migração para um plano inferior) perderá o acesso e os benefícios do site criado sob o plano anterior. Um novo site será criado, conforme as especificações do novo plano contratado. O site anterior não será excluído, mas sim arquivado, e não estará mais disponível para o CLIENTE, pois o valor do novo plano não cobre a manutenção da estrutura mais complexa.
  </p>
  <p>
    <span class="bold">3.2. Cancelamento da Assinatura:</span> No caso de cancelamento da assinatura, o CLIENTE perderá imediatamente o acesso a todos os benefícios do plano, incluindo manutenção, hospedagem e domínio. O site criado ficará offline. Caso o CLIENTE deseje adquirir o site para si, deverá pagar o valor justo e acordado pelo site, sendo que o PRESTADOR DE SERVIÇOS entregará todos os arquivos do site. A partir da aquisição, a manutenção, hospedagem e domínio passarão a ser de total responsabilidade do CLIENTE.
  </p>

  <h3>CLÁUSULA 4 - DO REEMBOLSO</h3>
  <p>
    <span class="bold">4.1. Condições de Reembolso:</span> O CLIENTE tem o direito de solicitar o reembolso integral da primeira compra realizada em até 24 (vinte e quatro) horas após a confirmação do pagamento.
  </p>
  <p>
    <span class="bold">4.2. Procedimento de Solicitação:</span> Para solicitar o reembolso, a comunicação deve ser feita exclusivamente através dos canais oficiais do PRESTADOR DE SERVIÇOS (e-mail ou WhatsApp). Na solicitação, o CLIENTE deverá informar seu nome completo, o número do pedido ou da transação, e o motivo da desistência.
  </p>
  <p>
    <span class="bold">4.3. Processamento do Reembolso:</span> Após o recebimento e a devida análise da solicitação, e uma vez verificadas as condições estabelecidas na Cláusula 4.1, o reembolso será processado no prazo acordado entre as partes, conforme os meios de pagamento originais.
  </p>

  <h3>CLÁUSULA 5 - DAS OBRIGAÇÕES DO PRESTADOR DE SERVIÇOS</h3>
  <p>
    <span class="bold">5.1. Gestão de Planos:</span> Em caso de alteração de plano, o PRESTADOR DE SERVIÇOS garantirá a criação de um novo site conforme o novo plano contratado. O site anterior será substituído pelo novo, mas será arquivado para fins de segurança e histórico, não sendo excluído.
  </p>
  <p>
    <span class="bold">5.2. Arquivamento de Sites:</span> O PRESTADOR DE SERVIÇOS se compromete a não excluir os sites criados sob planos anteriores, mas sim substituí-los no servidor pelo novo site e mantê-los arquivados, seguindo a regra do item 3.1.
  </p>

  <h3>CLÁUSULA 6 - DO PAGAMENTO E DA VIGÊNCIA</h3>
  <p>
    <span class="bold">6.1. Vigência:</span> Este contrato entra em vigor a partir da data de sua assinatura e é válido por prazo indeterminado, com renovação automática a cada mês, mediante o pagamento da assinatura.
  </p>
  <p>
    <span class="bold">6.2. Pagamento:</span> O CLIENTE se compromete a efetuar o pagamento mensal da assinatura na data de {{ \Carbon\Carbon::parse($nextBillingDate)->isoFormat('DD [de] MMMM [de] YYYY') }} de cada mês.
  </p>
    
  <h3>CLÁUSULA 7 - DO FORO</h3>
  <p>
    <span class="bold">7.1. Resolução de Conflitos:</span> Fica eleito o foro da comarca de Dourados/MS, com exclusão de qualquer outro, por mais privilegiado que seja, para dirimir quaisquer dúvidas ou conflitos oriundos do presente contrato.
  </p>

  <div class="signature-section">
    <p>E, por estarem justos e contratados, assinam o presente instrumento em duas vias de igual teor e forma.</p>
    <p>Dourados/MS, {{ \Carbon\Carbon::now()->locale('pt-BR')->isoFormat('DD [de] MMMM [de] YYYY') }}</p>
    
    <div class="signatures-container">
      <div class="signature-group">
        <div class="signature-line"></div>
        <div class="signature-text">
          <p><span class="bold">START TO FINISH</span><br>PRESTADOR DE SERVIÇOS</p>
        </div>
      </div>
        
      <div class="signature-group">
        <div class="signature-line"></div>
        <div class="signature-text">
          <p><span class="bold">{{ $user->name }}</span><br>CLIENTE</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>