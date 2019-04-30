

CREATE TABLE livro (
  codigo integer NOT NULL,
  Categoria varchar(50) NOT NULL,
  titulo varchar(50)  NULL,
  descricao varchar(50)  NULL,
  autor varchar(50)  NULL,
  caminho varchar(50)  NULL,
  PRIMARY KEY (codigo))


INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(1,'Desenvolvimento de Sistemas','Uml na Prática','Livro de estudos para desenvolvedores','Eduardo,RAMUREZ','uml/uml1.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(2,'Desenvolvimento de Sistemas','UML','Livro de estudos para estudantes','Eduardo,RAMUREZ','uml/uml2.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(3,'Desenvolvimento de Sistemas','UML Básico','Técnicas básicas de UML','Pedro,JOÃO','uml/uml3.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(4,'Desenvolvimento de Sistemas','UML','Livro de estudos UML','Sabatela,LEONARDO','uml/uml4.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(5,'Desenvolvimento de Sistemas','UML na Prática','Guia prático','Lobo,SILVA','uml/uml5.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(6,'Desenvolvimento de Sistemas','uml','Desenvolva sistema com UML','Deitel,M.','uml/uml6.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(7,'programacao','Manual do Programador','Guia para desenvolvedores','Eduardo,RAMUREZ','programacao/p1.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(8,'programacao','PHP na prática','Guia prático para desenvolvimento PHP','Eduardo,RAMUREZ','programacao/p2.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(9,'programacao','XML','Técnicas de Desenvolvimento','Pedro,JOÃO','programacao/p3.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(10,'programacao','JAVA','Aprenda Java em 1 mês!','Sabatela,LEONARDO','programacao/p4.jpg');

INSERT INTO livro (codigo, Categoria, titulo, descricao, autor, caminho) VALUES 
(11,'programacao','Visual Basic','Biblía do Visual Basic 6','Lobo,SILVA','programacao/p5.jpg');


