<?php
class Card
{
    private string $nome;
    private string $link;
    private string $img;
    private string $dica;
    private string $cor1;
    private string $cor2;
    private string $video;
    private int $num;

    public function __toString()
    {
        return "
        <div style='height:600px; width:400px; background-color:{$this->getCor1()};display:flex;flex-direction:column;align-items:center;border-radius:20px;'>
            <div style='display:flex;justify-content:center;align-items:center; heigh:10%; width:100%; background-color:{$this->getCor2()};border-radius:20px 20px 0 0;'>
            <h1>{$this->getNome()}</h1>
            </div>
            <div>
            <a href='?palpite={$this->getNum()}'><img src='{$this->getImg()}' alt='{$this->getNome()}' style='height:200px; margin-top:20px'></img></a>
            </div>
            <div>
            <p style:'{$this->getCor2()}'>{$this->getDica()}
            </p>
            </div>
            <iframe width='380' height='380' src='{$this->getVideo()}' allowfullscreen></iframe>
            <div>
            <a href='{$this->getLink()}' target='_blank' style='text-decoration:none; color:{$this->getCor2()};'>Link {$this->getNome()}</a>
            </div>
        </div>
        ";
    }
    public function resposta()
    {
        return "
        <div style='height:600px; width:400px; background-color:{$this->getCor1()};display:flex;flex-direction:column;align-items:center;border-radius:20px;'>
            <div style='display:flex;justify-content:center;align-items:center; heigh:10%; width:100%; background-color:{$this->getCor2()};border-radius:20px 20px 0 0;'>
            <h1>{$this->getNome()}</h1>
            </div>
            <div>
            <img src='{$this->getImg()}' alt='{$this->getNome()}' style='height:200px; margin-top:20px'></img>
            </div>
            <div>
            <p style:'{$this->getCor2()}'>{$this->getDica()}
            </p>
            </div>
            <iframe width='380' height='380' src='{$this->getVideo()}' allowfullscreen></iframe>
            <div>
            <a href='{$this->getLink()}' target='_blank' style='text-decoration:none; color:{$this->getCor2()};'>Link {$this->getNome()}</a>
            </div>
        </div>
        ";

    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of dica
     */
    public function getDica(): string
    {
        return $this->dica;
    }

    /**
     * Set the value of dica
     */
    public function setDica(string $dica): self
    {
        $this->dica = $dica;

        return $this;
    }

    /**
     * Get the value of cor1
     */
    public function getCor1(): string
    {
        return $this->cor1;
    }

    /**
     * Set the value of cor1
     */
    public function setCor1(string $cor1): self
    {
        $this->cor1 = $cor1;

        return $this;
    }

    /**
     * Get the value of cor2
     */
    public function getCor2(): string
    {
        return $this->cor2;
    }

    /**
     * Set the value of cor2
     */
    public function setCor2(string $cor2): self
    {
        $this->cor2 = $cor2;

        return $this;
    }

    /**
     * Get the value of video
     */
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * Set the value of video
     */
    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get the value of num
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * Set the value of num
     */
    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }
}
$palpite = $_GET["palpite"];
if($palpite === "")
{
    $palpite="nao informado";
}
if(is_numeric($palpite) && intval($palpite) == $palpite)
{
    $palpite = intval($palpite);
}
$sort = random_int(1,3);
$cards = array();
$cards[0] = new Card();
$cards[0]
->setNome("Minato Namikaze")
->setLink("https://ovicio.com.br/naruto-10-fatos-sobre-minato-namikaze-o-quarto-hokage/")
->setImg("https://ovicio.com.br/wp-content/uploads/2024/03/20240318-minato-kunai-01.jpg")
->setDica("Conhecido como relâmpago amarelo de Konoha")
->setCor1("yellow")
->setCor2("orange")
->setVideo("https://www.youtube.com/embed/O6zyeg5is1A")
->setNum(1);
$cards[1] = new Card();
$cards[1]
->setNome("Kakashi Hatake")
->setLink("https://ovicio.com.br/naruto-10-fatos-sobre-kakashi-hatake/")
->setImg("https://i0.wp.com/ovicio.com.br/wp-content/uploads/2024/03/20240306-kakashi-ninja.jpeg?w=602&ssl=1")
->setDica("Conhecido como ninja copiador")
->setCor1("purple")
->setCor2("blue")
->setVideo("https://www.youtube.com/embed/IeKOk6qGw5E")
->setNum(2);
$cards[2] = new Card();
$cards[2]
->setNome("Naruto Uzumaki")
->setLink("https://ovicio.com.br/naruto-10-fatos-sobre-naruto-uzumaki-o-setimo-hokage/")
->setImg("http://animeac.com.br/wp-content/uploads/2024/05/tudo-sobre-Naruto-Uzumaki.webp")
->setDica("Conhecido como herói da aldeia oculta da folha")
->setCor1("orange")
->setCor2("yellow")
->setVideo("https://www.youtube.com/embed/ObQMysW58NA")
->setNum(3);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Card Naruto</title>
</head>
<body style="width: 100dvw; height:100dvh; overflow:hidden; background-image:url('https://mrwallpaper.com/images/hd/anime-naruto-and-minato-sharing-chakra-y6yua7eiihbq1vm7.jpg'); align-items:center">
    <div style="width: 100dvw; height:20dvh;display: flex; justify-content:center; align-items:center;flex-direction:column">
    <?php
    switch($palpite)
    {
        case null: 
            print "<h1 style='color:white'>Selecione um número na url adicionando '/?palpite=[número de 1 a 3]' ou tocando na imagem do card</h1>";
        break;
        case "nao informado":
            print "<h1 style='color:white'>Você não deu um número</h1>";
            print "<a style='color:white' href='?'>clique aqui para reiniciar</a>";
        break;
        case is_string($palpite):
            print "<h1 style='color:white'>Você não deu um número</h1>";
            print "<a style='color:white' href='?'>clique aqui para reiniciar</a>";
        break;
        case $sort:
            print "<h1 style='color:green'>Você ganhou!!</h1>";
            print "<a style='color:white' href='?'>clique aqui para reiniciar</a>";
        break;
        default:
            if($palpite > 3 || $palpite < 1)
            {
                print "<h1 style='color:white'>Número inválido</h1>";
                print "<a style='color:white' href='?'>clique aqui para reiniciar</a>";
            }
            else
            {
                print "<h1 style='color:red'>Você errou!!</h1></br>";
                print "<h1 style='color:red'>A correta era</h1>";
                print "<a style='color:white' href='?'>clique aqui para reiniciar</a>";
            }
        break;
    }
    ?>
    </div>
    <div style="width: 100dvw; height:80dvh;display: flex; justify-content:space-evenly; align-items:center">
    <?php
    switch($palpite)
    {
        case null:
            print $cards[0];
            print $cards[1];
            print $cards[2];
        break;
        case "nao informado":
            print"<h1 style='color:red'>Erro, informe um número por favor</h1>";
        break;
        case is_string($palpite):
            print "<h1 style='color:red'>Pare de tentar estragar meu código</h1>";
        break;
        default:
            if($palpite > 0 && $palpite < 4)
            {
                print $cards[$sort-1]->resposta();
            }
        break;
    }
    ?>    
    </div>
</body>
</html>
