<?php
class Utilidades
{
    public static function redirect($url)
    {
        // o header do php as vezes da conflito quando a gente ja envia algum header pro navegador;
        echo '<script>window.location.href="' . $url . '"</script>';
        die();  //se n der um die, o código vai continuar sendo executado no servidor msm apos ser redirecionado.
    }

    public static function alert($mensagem)
    {
        echo '<script>alert("' . $mensagem . '")</script>';
    }

    public static function redirect_delay($url)
    {
        echo '<script>setTimeout(()=>{ window.location.href="' . $url . '" }, 2000)</script>';
        die();
    }

    public static function retornar_pagina()
    {
        echo "<script>javascript:history.back()</script>";
    }

    public static function verifica_pdf($arquivo)
    {
        $msg = null;
        $valido = null;

        if ($arquivo['tmp_name'] != '') {

            //tem arquivos
            $fileExt = explode('.', $arquivo['name']);
            $fileExt = $fileExt[count($fileExt) - 1];

            if ($fileExt == 'pdf') {

                //formato válido, validar tamanho
                $size = intval($arquivo['size'] / 1024);

                if ($size <= 5000) {
                    $valido = true;
                } else {
                    $msg = 'Tamanho é superior a 5mb';
                    $valido = false;
                }
            } else {
                $msg = 'Formato inválido';
                $valido = false;
            }
        }

        return [
            'msg' => $msg,
            'valido' => $valido
        ];
    }

    /**
     * Retorna a diferença, em dias, das datas informadas.
     */
    public static function diferenca_dias($data_inicio, $data_fim)
    {
        $fim = new DateTime($data_fim);
        $inicio = new DateTime($data_inicio);

        return $fim->diff($inicio)->days;
    }


    public static function retira_acento($texto)
    {
        $caracteres_sem_acento = array(
            'Š' => 'S', 'š' => 's', 'Ð' => 'Dj', 'Â' => 'Z', 'Â' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A',
            'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I',
            'Ï' => 'I', 'Ñ' => 'N', 'Å' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U',
            'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a',
            'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i',
            'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'Å' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u',
            'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'ƒ' => 'f',
            'Ä' => 'a', 'î' => 'i', 'â' => 'a', 'È' => 's', 'È' => 't', 'Ä' => 'A', 'Î' => 'I', 'Â' => 'A', 'È' => 'S', 'È' => 'T',
        );
        $nova_string = strtr($texto, $caracteres_sem_acento);
        return $nova_string;
    }
}
