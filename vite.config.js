import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0', // necessário para acessar de outros dispositivos
        port: 5173,
        strictPort: true,
        hmr: {
            host: '10.0.0.102', // seu IP local na rede
        },
    },    
    plugins: [
        laravel({
            input: [
                // Welcome
                    'resources/css/welcome/welcome.css',
                    'resources/js/welcome/welcome.js',
                
                // Login
                    'resources/css/autenticacao/login.css',
                    'resources/js/autenticacao/login.js',
               
                // Register
                    'resources/css/autenticacao/register.css', 
                    'resources/js/autenticacao/register.js',

                // dashboard
                    'resources/css/dashboard/dashboard.css',
                    'resources/js/dashboard/dashboard.js',    

                // Categorias
                    // barbearia                    
                        'resources/css/categorias/barbearia.css',
                        'resources/js/categorias/barbearia.js',
                    // cafeteria                        
                        'resources/css/categorias/cafeteria.css',
                    // centro                        
                        'resources/css/categorias/centro-cultural.css',
                        'resources/js/categorias/centro-cultural.js',
                    // clinica                        
                        'resources/css/categorias/clinica.css',
                        'resources/js/categorias/clinica.js',
                    // farmacia                        
                        'resources/css/categorias/farmacia.css',
                        'resources/js/categorias/farmacia.js',
                    // floricultura                        
                        'resources/css/categorias/floricultura.css',
                        'resources/js/categorias/floricultura.js',
                    // hotel                        
                        'resources/css/categorias/hotel.css',
                        'resources/js/categorias/hotel.js',                        
                    // loja-materiais                        
                        'resources/css/categorias/loja-materiais.css',
                    // loja-roupas                        
                        'resources/css/categorias/loja-roupas.css',
                        'resources/js/categorias/loja-roupas.js',                        
                    // lojas-moveis                        
                        'resources/css/categorias/lojas-moveis.css',
                    // mercado
                        'resources/css/categorias/mercado.css',
                        'resources/js/categorias/mercado.js',                         
                    // odonto
                        'resources/css/categorias/odonto.css',
                    // panificadora
                        'resources/css/categorias/panificadora.css',
                        'resources/js/categorias/panificadora.js',    
                    // park-aquatico                          
                        'resources/css/categorias/park-aquatico.css',
                        'resources/js/categorias/park-aquatico.js',   
                    // pousada                      
                        'resources/css/categorias/pousada.css',
                    // psicologico
                        'resources/css/categorias/psicologico.css',
                        'resources/js/categorias/psicologico.js',          
                    // restaurante                 
                        'resources/css/categorias/restaurante.css',
                        'resources/js/categorias/restaurante.js',   
                    // salao-beleza                 
                        'resources/css/categorias/salao-beleza.css',
                        'resources/js/categorias/salao-beleza.js',   
                    // turismo
                        'resources/css/categorias/turismo.css',
            ],            
            refresh: true,
        }),
        tailwindcss(),
    ],
    resolve:{
        alias:{
            // @ e # funcionam como um apelido para o diretório, ao invés de chamar "resources/js/bootstrap.js", chame apenas "@/bootstrap.js"
            "@": "resources/js",
            "#": "resources/css"
        }
    }
});