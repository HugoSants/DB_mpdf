<?php
require_once __DIR__ . '/../models/Produto.php';
require_once __DIR__ . '/../../vendor/autoload.php';

class ProdutoController {
    
    private $produtoModel;

    public function __construct($db) {

        $this->produtoModel = new Produto($db);

    }

    public function gerarRelatorioPDF(){
        $produtos = $this->produtoModel->listarProdutos();


        ob_start();
        include __DIR__ .'/../views/relatorio_produtos.php';
        $html = ob_get_clean();

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->writeHTML($html);
        $mpdf->Output('relatorio_produtos.pdf', \Mpdf\Output\Destination::INLINE);

    }
}
?>