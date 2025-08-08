@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Contrato e cláusulas')

@push('estilosEcodigosDash')
  @vite(['resources/css/dashboard/dashboard.css', 'resources/js/dashboard/dashboard.js'])
@endpush

@section('content')
<div class="container" style="margin-top: 50px;">
  <h2 style="text-align: center; font-size: 40px;">Status do contrato</h2>

  @if($status === 'contract_accepted')
    <div class="status-indicator status-accepted">
      <i class="fa-solid fa-circle-check"></i>
      <span>Você aceitou o contrato.</span>
    </div>
  @elseif($status === 'contract_refused')
    <div class="status-indicator status-refused">
      <i class="fa-solid fa-circle-xmark"></i>
      <span>Você recusou os termos do contrato. Seu acesso pode ser limitado.</span>
    </div>
  @else
    <div class="status-indicator status-pending">
      <i class="fa-solid fa-triangle-exclamation"></i>
      <span>Você ainda não respondeu ao contrato.</span>
    </div>

  @endif

  <div class="contract-container">
    <div class="option-contract">
      <a href="{{ route('contract.download') }}" class="download-contract-status" target="_blank">
        <i class="fas fa-file-pdf"></i> Baixar contrato em PDF
      </a>

      <a href="/#precos" class="aceitar-contract-status">
        <i class="fa-solid fa-file-signature"></i> Acessar a página para aceitar os termos
      </a>     
    </div>

    <h1 class="contract-title">Contrato de Prestação de Serviços de Assinatura Mensal de Website</h1>
    
    <h2 class="section-heading">DAS PARTES</h2>
    <p>
      <strong>CONTRATADO:</strong> START TO FINISH, pessoa jurídica de direito privado inscrita no CNPJ sob o nº 098.717.321-98, com sede em Rua Padre Aquiles Pio Redin - 150, doravante denominada <strong>PRESTADOR DE SERVIÇOS</strong>.
    </p>
    <p>
      <strong>CONTRATANTE:</strong> {{Auth::user()->name}}, pessoa jurídica ou física, inscrito no CNPJ/CPF sob o nº {{Auth::user()->document}}, com endereço em {{Auth::user()->address}}, doravante denominado <strong>CLIENTE</strong>.
    </p>
    
    <h2 class="section-heading">CONSIDERAÇÕES INICIAIS</h2>
    <p>
      O presente instrumento tem como objetivo estabelecer as condições para a prestação de serviços de assinatura mensal de website, que inclui a criação, manutenção, hospedagem e outros benefícios descritos abaixo.
    </p>
    
    <ul class="clause-list">
      <li>
        <strong class="clause-title">Objeto e Benefícios da Assinatura:</strong> Este contrato tem por objeto a prestação de serviços de assinatura mensal, pela qual o CLIENTE terá acesso a um pacote de benefícios relacionados a um website, conforme o plano contratado.
        <ul class="sub-clause-list">
          <li><strong class="clause-item">a) Criação de Site Gratuita:</strong> A criação de um site é oferecida gratuitamente, conforme as especificações e limitações do plano de assinatura escolhido.</li>
          <li><strong class="clause-item">b) Manutenção Gratuita:</strong> O PRESTADOR DE SERVIÇOS realizará a manutenção técnica e de segurança do site.</li>
          <li><strong class="clause-item">c) Adição de Novo Conteúdo Gratuita:</strong> O PRESTADOR DE SERVIÇOS fará a adição de novos conteúdos fornecidos pelo CLIENTE.</li>
          <li><strong class="clause-item">d) Hospedagem Gratuita:</strong> O site será hospedado nos servidores do PRESTADOR DE SERVIÇOS.</li>
          <li><strong class="clause-item">e) Domínio Gratuito:</strong> O domínio do site será gerenciado e mantido pelo PRESTADOR DE SERVIÇOS.</li>
        </ul>
      </li>
      <li>
        <strong class="clause-title">Das Obrigações do Cliente:</strong>
        <ul class="sub-clause-list">
          <li><strong class="clause-item">a) Agendamento:</strong> O CLIENTE deverá solicitar a criação de site, adição de conteúdo ou qualquer outro serviço através de agendamento prévio, utilizando os canais de comunicação fornecidos pelo PRESTADOR DE SERVIÇOS (e.g., WhatsApp, e-mail, etc.).</li>
          <li><strong class="clause-item">b) Aviso Prévio:</strong> Para qualquer alteração de plano (upgrade/downgrade) ou cancelamento da assinatura, o CLIENTE deverá notificar o PRESTADOR DE SERVIÇOS com, no mínimo, 7 dias de antecedência, para que a gestão dos agendamentos e das tarefas possa ser realizada de forma adequada.</li>
          <li><strong class="clause-item">c) Dados Cadastrais:</strong> O CLIENTE é responsável por fornecer e manter atualizados seu CPF/CNPJ e endereço. A falta ou o fornecimento de informações incorretas poderá invalidar este contrato como prova judicial para fins de cobrança ou qualquer outro processo legal movido contra o PRESTADOR DE SERVIÇOS.</li>
        </ul>
      </li>
      <li>
        <strong class="clause-title">Das Condições e Restrições:</strong>
        <ul class="sub-clause-list">
          <li><strong class="clause-item">a) Downgrade de Plano:</strong> O CLIENTE que optar por um "downgrade" (migração para um plano inferior) perderá o acesso e os benefícios do site criado sob o plano anterior. Um novo site será criado, conforme as especificações do novo plano contratado. O site anterior não será excluído, mas sim arquivado, e não estará mais disponível para o CLIENTE, pois o valor do novo plano não cobre a manutenção da estrutura mais complexa.</li>
          <li><strong class="clause-item">b) Cancelamento da Assinatura:</strong> No caso de cancelamento da assinatura, o CLIENTE perderá imediatamente o acesso a todos os benefícios do plano, incluindo manutenção, hospedagem e domínio. O site criado ficará offline. Caso o CLIENTE deseje adquirir o site para si, deverá pagar o valor justo e acordado pelo site, sendo que o PRESTADOR DE SERVIÇOS entregará todos os arquivos do site. A partir da aquisição, a manutenção, hospedagem e domínio passarão a ser de total responsabilidade do CLIENTE.</li>
        </ul>
      </li>
            <li>
                <strong class="clause-title">Do Reembolso:</strong>
                <p>O CLIENTE tem o direito de solicitar o reembolso integral da primeira compra realizada em até 24 horas após a confirmação do pagamento. Para isso, a solicitação deve ser feita através dos canais de comunicação oficiais do PRESTADOR DE SERVIÇOS (e-mail ou WhatsApp), informando o nome completo, o número do pedido e o motivo da desistência. Após a análise e aprovação da solicitação, o reembolso será processado no prazo acordado entre as partes.</p>
            </li>
      <li>
        <strong class="clause-title">Das Obrigações do Prestador de Serviços:</strong>
        <ul class="sub-clause-list">
          <li><strong class="clause-item">a) Gestão de Planos:</strong> Em caso de alteração de plano, o PRESTADOR DE SERVIÇOS garantirá a criação de um novo site conforme o novo plano contratado. O site anterior será substituído pelo novo, mas será arquivado para fins de segurança e histórico, não sendo excluído.</li>
          <li><strong class="clause-item">b) Arquivamento de Sites:</strong> O PRESTADOR DE SERVIÇOS se compromete a não excluir os sites criados sob planos anteriores, mas sim substituí-los no servidor pelo novo site e mantê-los arquivados, seguindo a regra do item 3.1.</li>
        </ul>
      </li>
      <li>
        <strong class="clause-title">Do Pagamento e da Vigência:</strong>
        <p>Este contrato entra em vigor a partir da data de sua assinatura e é válido por prazo indeterminado, com renovação automática a cada mês, mediante o pagamento da assinatura.</p>
      </li>
      <li>
        <strong class="clause-title">Do Foro:</strong>
        <p>Fica eleito o foro da comarca de Dourados/MS, com exclusão de qualquer outro, por mais privilegiado que seja, para dirimir quaisquer dúvidas ou conflitos oriundos do presente contrato.</p>
      </li>
    </ul>

    <div class="signatures-section">
      <div class="signature-block">
        <div class="signature-line"></div>
        <div class="signature-info">
          <strong>START TO FINISH</strong><br>
          PRESTADOR DE SERVIÇOS
        </div>
      </div>
      <div class="signature-block">
        <div class="signature-line"></div>
        <div class="signature-info">
          <strong>{{Auth::user()->name}}</strong><br>
          CLIENTE
        </div>
      </div>
    </div>
  </div>  
</div>
@endsection
