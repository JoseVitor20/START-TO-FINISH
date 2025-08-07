@extends('layouts.app')

@section('title', 'Contrato de Assinatura')

@push('estilosEcodigos')
    @vite(['resources/css/welcome/welcome.css', 'resources/js/welcome/welcome.js'])
@endpush

@section('content')
<style>
    /* Estilos gerais para o contrato */
    .contract-container {
        font-family: 'Times New Roman', serif;
        font-size: 12pt;
        line-height: 1.5;
        max-width: 800px;
        margin: 0 auto;
        padding: 0px;
    }
    
    .contract-title {
        text-align: center;
        font-size: 14pt;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    .section-title {
        font-weight: bold;
        text-transform: uppercase;
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 12pt;
    }
    
    .clause-title {
        font-weight: bold;
        margin-top: 15px;
    }
    
    .clause-item {
        margin-left: 20px;
        margin-bottom: 10px;
    }
    
    ul, ol {
        padding-left: 20px;
    }
    
    .signatures {
        margin-top: 50px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        text-align: center;
    }
    
    .signature-block {
        width: 30%;
    }
    
    .signature-line {
        border-top: 1px solid black;
        margin-bottom: 5px;
    }
    
    .signature-name {
        font-weight: bold;
        margin-top: 5px;
    }
    
    /* Estilos para impressão */
    @media print {
        body {
            font-size: 12pt;
        }
        .contract-container {
            width: 100%;
            margin: 0;
            padding: 0;
            box-shadow: none;
        }
    }
    
    .voltar-contrato {
        display: inline-block;
        margin-bottom: 20px;
        color: #000;
        text-decoration: none;
    }
</style>

<div class="contract-container">
    <h1 class="contract-title">Contrato de Prestação de Serviços de Assinatura Mensal de Website</h1>
    
    <div class="section-title">DAS PARTES</div>
    <p>
        <strong>CONTRATADO:</strong> START TO FINISH, pessoa jurídica de direito privado inscrita no CNPJ sob o nº 098.717.321-98, com sede em Rua Padre Aquiles Pio Redin - 150, doravante denominada <strong>PRESTADOR DE SERVIÇOS</strong>.
    </p>
    <p>
        <strong>CONTRATANTE:</strong> {{Auth::user()->name}}, pessoa jurídica ou física, inscrito no CNPJ/CPF sob o nº {{Auth::user()->document}}, com endereço em {{Auth::user()->address}}, doravante denominado <strong>CLIENTE</strong>.
    </p>
    
    <div class="section-title">CONSIDERAÇÕES INICIAIS</div>
    <p>
        O presente instrumento tem como objetivo estabelecer as condições para a prestação de serviços de assinatura mensal de website, que inclui a criação, manutenção, hospedagem e outros benefícios descritos abaixo.
    </p>
    
    <div class="section-title">CLÁUSULA 1 - OBJETO E BENEFÍCIOS DA ASSINATURA</div>
    <p>Este contrato tem por objeto a prestação de serviços de assinatura mensal, pela qual o CLIENTE terá acesso a um pacote de benefícios relacionados a um website, conforme o plano contratado.</p>
    <p>O CLIENTE, ao manter sua assinatura em dia, terá direito aos seguintes benefícios:</p>
    <ul class="sub-clause-list">
        <li><strong class="clause-item">a) Criação de Site Gratuita:</strong> A criação de um site é oferecida gratuitamente, conforme as especificações e limitações do plano de assinatura escolhido.</li>
        <li><strong class="clause-item">b) Manutenção Gratuita:</strong> O PRESTADOR DE SERVIÇOS realizará a manutenção técnica e de segurança do site.</li>
        <li><strong class="clause-item">c) Adição de Novo Conteúdo Gratuita:</strong> O PRESTADOR DE SERVIÇOS fará a adição de novos conteúdos fornecidos pelo CLIENTE.</li>
        <li><strong class="clause-item">d) Hospedagem Gratuita:</strong> O site será hospedado nos servidores do PRESTADOR DE SERVIÇOS.</li>
        <li><strong class="clause-item">e) Domínio Gratuito:</strong> O domínio do site será gerenciado e mantido pelo PRESTADOR DE SERVIÇOS.</li>
    </ul>

    <div class="section-title">CLÁUSULA 2 - DAS OBRIGAÇÕES DO CLIENTE</div>
    <ul class="sub-clause-list">
        <li><strong class="clause-item">a) Agendamento:</strong> O CLIENTE deverá solicitar a criação de site, adição de conteúdo ou qualquer outro serviço através de agendamento prévio, utilizando os canais de comunicação fornecidos pelo PRESTADOR DE SERVIÇOS (e.g., WhatsApp, e-mail, etc.).</li>
        <li><strong class="clause-item">b) Aviso Prévio:</strong> Para qualquer alteração de plano (upgrade/downgrade) ou cancelamento da assinatura, o CLIENTE deverá notificar o PRESTADOR DE SERVIÇOS com, no mínimo, 7 dias de antecedência, para que a gestão dos agendamentos e das tarefas possa ser realizada de forma adequada.</li>
        <li><strong class="clause-item">c) Dados Cadastrais:</strong> O CLIENTE é responsável por fornecer e manter atualizados seu CPF/CNPJ e endereço. A falta ou o fornecimento de informações incorretas poderá invalidar este contrato como prova judicial para fins de cobrança ou qualquer outro processo legal movido contra o PRESTADOR DE SERVIÇOS.</li>
    </ul>
    
    <div class="section-title">CLÁUSULA 3 - DAS CONDIÇÕES E RESTRIÇÕES</div>
    <ul class="sub-clause-list">
        <li><strong class="clause-item">a) Downgrade de Plano:</strong> O CLIENTE que optar por um "downgrade" (migração para um plano inferior) perderá o acesso e os benefícios do site criado sob o plano anterior. Um novo site será criado, conforme as especificações do novo plano contratado. O site anterior não será excluído, mas sim arquivado, e não estará mais disponível para o CLIENTE, pois o valor do novo plano não cobre a manutenção da estrutura mais complexa.</li>
        <li><strong class="clause-item">b) Cancelamento da Assinatura:</strong> No caso de cancelamento da assinatura, o CLIENTE perderá imediatamente o acesso a todos os benefícios do plano, incluindo manutenção, hospedagem e domínio. O site criado ficará offline. Caso o CLIENTE deseje adquirir o site para si, deverá pagar o valor justo e acordado pelo site, sendo que o PRESTADOR DE SERVIÇOS entregará todos os arquivos do site. A partir da aquisição, a manutenção, hospedagem e domínio passarão a ser de total responsabilidade do CLIENTE.</li>
    </ul>

    <div class="section-title">CLÁUSULA 4 - DAS OBRIGAÇÕES DO PRESTADOR DE SERVIÇOS</div>
    <ul class="sub-clause-list">
        <li><strong class="clause-item">a) Gestão de Planos:</strong> Em caso de alteração de plano, o PRESTADOR DE SERVIÇOS garantirá a criação de um novo site conforme o novo plano contratado. O site anterior será substituído pelo novo, mas será arquivado para fins de segurança e histórico, não sendo excluído.</li>
        <li><strong class="clause-item">b) Arquivamento de Sites:</strong> O PRESTADOR DE SERVIÇOS se compromete a não excluir os sites criados sob planos anteriores, mas sim substituí-los no servidor pelo novo site e mantê-los arquivados, seguindo a regra do item 3.1.</li>
    </ul>
    
    <div class="section-title">CLÁUSULA 5 - DO PAGAMENTO E DA VIGÊNCIA</div>
    <p>Este contrato entra em vigor a partir da data de sua assinatura e é válido por prazo indeterminado, com renovação automática a cada mês, mediante o pagamento da assinatura.</p>
    
    <div class="section-title">CLÁUSULA 6 - DO FORO</div>
    <p>Fica eleito o foro da comarca de Dourados/MS, com exclusão de qualquer outro, por mais privilegiado que seja, para dirimir quaisquer dúvidas ou conflitos oriundos do presente contrato.</p>
    
    <div class="signatures">
        <div class="signature-block">
            <div class="signature-line"></div>
            <div class="signature-name">START TO FINISH</div>
            <p>PRESTADOR DE SERVIÇOS</p>
        </div>
        <div class="signature-block">
            <div class="signature-line"></div>
            <div class="signature-name">{{Auth::user()->name}}</div>
            <p>CLIENTE</p>
        </div>
    </div>
</div>
@endsection