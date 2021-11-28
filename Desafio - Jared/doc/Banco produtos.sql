CREATE TABLE produtos (
  id_produtos INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_produto VARCHAR(100) NULL,
  marca_produto VARCHAR(100) NULL,
  venergetico_produto VARCHAR(10) NULL,
  carbo_produto VARCHAR(10) NULL,
  proteina_produto VARCHAR(10) NULL,
  gtotais_produto VARCHAR(10) NULL,
  gsaturadas_produto VARCHAR(10) NULL,
  gtrans_produto VARCHAR(10) NULL,
  fibra_produto VARCHAR(10) NULL,
  sodio_produto VARCHAR(10) NULL,
  peso_produto VARCHAR(10) NULL,
  lote_produto VARCHAR(10) NULL,
  validade_produto DATE NULL,
  PRIMARY KEY(id_produtos)
);


