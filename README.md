# Bem vindo ao Cadastro de Compra

A interface foi criada em **AdminLTE** com base em **Bootstrap 4**
É bem intuitiva e fácil de navegar

Para acessar é necessário logar, ao iniciar o projeto em Laravel use o comando `php artisan migrate --seed` para criar usuários e popular as tabelas.

O **primeiro usuário** criado será sempre um ***super usuário***.

Todas as senhas dos usuários de teste são *teste123* sendo necessário ir ao banco pegar apenas o e-mail gerado.

A tela de clientes é a única restrita para exemplo, a restrição foi feita por *Policies*

O backend foi elaborado com padrões RESTfull e sempre retornam um Json com os dados requeridos ou mensagens, apenas erros e restrições de acesso fogem a regra.

Foi elaborado este link para logar por API: **POST** *{{local>host:8000}}/api/login*
os parâmetros são apenas email e senha.

O login gera um token de autenticação do tipo Beaurer que é retornado e deve ser inserido na tag Authorization do cabeçalho das requisições pra obter acesso.

No backend todas as rotas estão com restrição de acesso, a não ser as que devem ser liberadas: login e register

As validações de formulários foram feitas por FormRequest e funcionam tanto no Front quanto na API

As tabelas Client, Product e Order possuem as rotas básicas do CRUD Laravel.

