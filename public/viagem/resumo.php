<?php require_once 'layouts/header.php';

$destino = $_POST['estado'];
$transporte = $_POST['transporte'];
$diarias  = $_POST['diarias'];

$translado = $_POST['translado'];
$translado =  (isset($_POST['translado'])) ? true : false;
$hotel = $_POST['hotel'];
$total = (isset($_POST['total'])) ? $_POST['total'] : null;
$passeio = $_POST['passeio'];

if($destino == "Recife"){
    if($transporte== "Aviao" && $diarias== "Tres"){
        $total = "R$3.000,00";
    }
    elseif ($transporte== "Aviao" && $diarias== "Dois") {
      $total = "R$2.500,00";
    }
    elseif ($transporte== "Aviao" && $diarias== "Um") {
      $total = "R$1.500,00";
    }

    if ($transporte== "Navio" && $diarias== "Tres") {
      $total = "R$4.000,00";
    }
    elseif ($transporte== "Navio" && $diarias== "Dois") {
      $total = "R$3.500,00";
    }
    elseif ($transporte== "Navio" && $diarias== "Um") {
      $total = "R$2.500,00";
    }

    if ($transporte== "Onibus" && $diarias== "Tres") {
      $total = "R$1.500,00";
    }elseif ($transporte== "Onibus" && $diarias== "Dois") {
      $total = "R$3.500,00";
    }
    elseif ($transporte== "Onibus" && $diarias== "Um") {
      $total = "R$2.500,00";
    }

}

elseif ($destino == "Natal") {
    if($transporte== "Aviao" && $diarias== "Tres"){
        $total = "R$3.000,00";
    }
      elseif ($transporte== "Aviao" && $diarias== "Dois") {
        $total = "R$2.500,00";
      }
      elseif ($transporte== "Aviao" && $diarias== "Um") {
        $total = "R$800,00";
      }

    if ($transporte== "Navio" && $diarias== "Tres") {
      $total = "R$6.000,00";
    }
      elseif ($transporte== "Navio" && $diarias== "Dois") {
        $total = "R$4.500,00";
      }
      elseif ($transporte== "Navio" && $diarias== "Um") {
        $total = "R$3.500,00";
      }

    if ($transporte== "Onibus" && $diarias== "Tres") {
      $total = "R$3.500,00";
    }
      elseif ($transporte== "Onibus" && $diarias== "Dois") {
        $total = "R$2.500,00";
      }
      elseif ($transporte== "Onibus" && $diarias== "Um") {
        $total = "R$500,00";
      }


}
elseif ($destino == "Sirinhaem") {
    if($transporte== "Aviao" && $diarias== "Tres"){
        $total = "R$1.000,00";
    }
      elseif ($transporte== "Aviao" && $diarias== "Dois") {
        $total = "R$700,00";
      }
      elseif ($transporte== "Aviao" && $diarias== "Um") {
        $total = "R$500,00";
      }

    if ($transporte== "Navio" && $diarias== "Tres") {
      $total = "R$2.000,00";
    }
      elseif ($transporte== "Navio" && $diarias== "Dois") {
        $total = "R$1.500,00";
      }
      elseif ($transporte== "Navio" && $diarias== "Um") {
        $total = "R$500,00";
      }


  if ($transporte== "Onibus" && $diarias=="Tres") {
    $total = "R$800,00";
  }
    elseif ($transporte== "Onibus" && $diarias== "Dois") {
      $total = "R$500,00";
    }
    elseif ($transporte== "Onibus" && $diarias== "Um") {
      $total = "R$350,00";
    }

}

elseif ($destino == "Porto") {
  if($transporte== "Aviao" && $diarias== "Tres"){
      $total = "R$4.000,00";
  }
    elseif ($transporte== "Aviao" && $diarias== "Dois") {
      $total = "R$3.500,00";
    }
    elseif ($transporte== "Aviao" && $diarias== "Um") {
      $total = "R$2.500,00";
    }


  if ($transporte== "Navio" && $diarias== "Tres") {
    $total = "R$6.000,00";
  }
    elseif ($transporte== "Navio" && $diarias== "Dois") {
      $total = "R$4.500,00";
    }
    elseif ($transporte== "Navio" && $diarias== "Um") {
      $total = "R$3.500,00";
    }

  if ($transporte== "Onibus" && $diarias== "Tres") {
    $total = "R$3.500,00";
  }
    elseif ($transporte== "Onibus" && $diarias== "Dois") {
      $total = "R$2.500,00";
    }
    elseif ($transporte== "Onibus" && $diarias== "Um") {
      $total = "R$500,00";
    }
}

if ($destino == "Recife"){
	$img =	 "uploads/recife.jpg";
	}
  elseif ($destino == "Natal") {
	$img =	 "uploads/natal.jpg";
  }
  elseif ($destino == "Sirinhaem") {
	$img =	 "uploads/porto.jpg";
  }
  elseif ($destino == "Porto") {
    $img = "uploads/sirinha.jpg";
  }

?>

<div class="container">
  <div class="resumo-layout">
    <h1>Resumo da Viagem</h1>
    <hr><br>
    <p><img src="<?php echo $img; ?>" alt="" class="img-thumbnail"></p><br>
    <p>Destino: <?= $destino ?></p><br>
    <p>Transporte: <?= $transporte ?></p><br>
    <p>Hotel: <?= $hotel ?> Estrela(s)</p><br>
    <p>Diaria(s): <?= $diarias ?></p><br>
    <p>Translado: <?= $translado ?></p><br>
    <p>Total: <?= $total ?></p><br>
    <p>Passeio: <?= $passeio ?></p>
  </div>
  <a href="../usuario/perfil.php"></a>
</div>


<?php require_once 'layouts/footer.php'; ?>
