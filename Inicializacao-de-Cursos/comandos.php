Comandos de GIT - SISTEMA DE CONTROLE DE VERSÕES :]

<Iniciando um repositório>
	git init

<Validando os arquivos monitorados/alterados>
	git status
 <GIT monitarando os arquivos do repositório>
 	git add arquivo ou git add . ( assim adiciona todos os arquivos da pasta/repositório)
 <COMMIT informar o que foi modificado junto com a mensagem>
 	git commit -m ( parametro -m para adicionar a mensagem ) "MENSAGEM"
<GIT LOG para obter informações dos commits>
	git log 
	git log -p para mostrar as informação do que foi modificado
	https://devhints.io/git-log
<GIT config>
	git config --local user.name ou user.email somente para esse repositório.
	git config --global user.name ou user.email para todos os repositórios na máquina
<Ignorando arquivos>
	git 
<Adicionando um novo repositório>
	git remote ( para listar )
	git remote -v ( para lista com o caminho/url )
	git remote add "nome do repositorio" add URL ou diretório.
<Clonando o repositório>
	git clone "caminho" "nome das pasta que eu quero" (trazer pela primeira vez todos os dados de um repositório remoto para o nosso repositório)
<Enviando dados para o repositório>
	git push "nome do respositório" master( empurrando os dados )
<Baixando  os dados>
	git pull ( pega os dados e traz ) 
<Renomeando o nome do repositório>
	git remote rename "antigonome" "novonome"
<Criando um ponto de "restauração">
	git tag -a "nome" -m "adicionando um comentário"( com isso, as alterações após salvas, vão gerar releases, 0.2, 0.3 e etc )