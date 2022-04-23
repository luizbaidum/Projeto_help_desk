## Projeto_help_desk

Trata-se de um aplicativo web com tratamento de login e criação de chamados para um suporte <br>
Linguaguens: PHP <br> 
Estrutura: HTML + CSS <br>

Trabalhamos laços de repetição, controle de sessão (session_start), envio de formulários, registro de dados em arquivo de texto externo. <br>

### Atenção: <br>
<p>O projeto original, por segurança, colocava os arquivos arquivo.txt e valida_login.php em uma pasta fora do diretório Projeto Help Disk e requisitava esses arquivos via require_once(). Mas, para efeitos práticos, os códigos aqui foram todos alterados para que os arquivos fiquem na mesma pasta sem atrapalhar a execução do aplicativo. Lembre-se: isso não é seguro.</p>

Atualização: 11/04 <br>
Pequenas melhorias no layout, <br>
Aplicaçao de include() para deixar código menos verboso, <br>
Criação e aplicação do script para logoff e página logoff. <br>

Atualização: 13/04 <br>
Melhorias na página abrir_chamado.php, <br>
E novo código próprio para o script registra_chamado.php. <br>

Atualização: 15/04 <br>
registra_chamado.php consegue reconhecer campo não preenchido e alerta usuário, além de não gravar chamados com campos não preenchidos. <br>

Atualização: 17/04 <br>
Inserido níveis de acesso e melhorias no menu. <br>

Atualização: 17/04 v2 <br>
Por segurança o script relacionado a login e o arquivo de dados onde os chamados ficam gravados foram movidos para uma pasta fora do public_html. 

Lançamento final do APP. v1.0
