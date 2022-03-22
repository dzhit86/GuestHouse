<?

    $json = filter_input(INPUT_POST, 'info');
    $data = json_decode($json); 

    $name = $data->name_v;
    //$tel = $data->tel_v;
    $email = "dream.fdr@gmail.com";
    //$email = "alexandr.korecki@gmail.com";

    mail($email, 'ПРАСКОВЕЕВКА', "заявка: $name ");



