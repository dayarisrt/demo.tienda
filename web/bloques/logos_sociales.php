<div class="logos_sociales">
   <?php if ($Empresa['fb'] != '') { 
        if($Empresa['facebookIcon'] == ''){ ?>
            <a class="logos_sociales" href="<?=$Empresa['fb']?>" title="Facebook" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
        <?php }else{ ?>
            <a class="logos_sociales" href="<?=$Empresa['fb']?>" title="Facebook" target="_blank"><img style="max-height:40px; max-width:40px; top:15px;" src="<?=$draizp?>/iconosRedes/<?=$Empresa['facebookIcon']?>" class="fab fa-facebook fa-2x"></a>
        <?php }
    }?>
    <?php if ($Empresa['tw'] != '') {
        if($Empresa['twitterIcon'] == ''){ ?>
            <a class="logos_sociales" href="<?=$Empresa['tw']?>" title="Twitter" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
        <?php }else{ ?>
            <a class="logos_sociales" href="<?=$Empresa['tw']?>" title="Twitter" target="_blank"><img style="max-height:40px; max-width:40px; top:15px;" src="<?=$draizp?>/iconosRedes/<?=$Empresa['twitterIcon']?>" class="fab fa-twitter fa-2x"></a>
        <?php }
    } ?>
    <?php if ($Empresa['gp'] != '') {
        if($Empresa['gplusIcon'] == ''){ ?>
            <a class="logos_sociales" href="<?=$Empresa['gp']?>" title="Google+" target="_blank"><i class="fab fa-google-plus fa-2x"></i></a>
        <?php }else{ ?>
            <a class="logos_sociales" href="<?=$Empresa['gp']?>" title="Google+" target="_blank"><img style="max-height:40px; max-width:40px; top:15px;" src="<?=$draizp?>/iconosRedes/<?=$Empresa['gplusIcon']?>" class="fab fa-google-plus fa-2x"></a>
        <?php }
    } ?>
    <?php if ($Empresa['pt'] != '') {
        if($Empresa['pinterestIcon'] == ''){ ?>
            <a class="logos_sociales" href="<?=$Empresa['pt']?>" title="Pinterest" target="_blank"><i class="fab fa-pinterest fa-2x"></i></a>
        <?php }else{ ?>
            <a class="logos_sociales" href="<?=$Empresa['pt']?>" title="Pinterest" target="_blank"><img style="max-height:40px; max-width:40px; top:15px;" src="<?=$draizp?>/iconosRedes/<?=$Empresa['pinterestIcon']?>" class="fab fa-pinterest fa-2x"></a>
        <?php }
    } ?>
    <?php if ($Empresa['in'] != '') {
        if($Empresa['instagramIcon'] == ''){ ?>
            <a class="logos_sociales" href="<?=$Empresa['in']?>" title="Instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <?php }else{ ?>
            <a class="logos_sociales" href="<?=$Empresa['in']?>" title="Instagram" target="_blank"><img style="max-height:40px; max-width:40px; top:15px;" src="<?=$draizp?>/iconosRedes/<?=$Empresa['instagramIcon']?>" class="fab fa-instagram fa-2x"></a>
        <?php }
    } ?>
    <?php if ($Empresa['yt'] != '') {
        if($Empresa['youtubeIcon'] == ''){ ?>
            <a class="logos_sociales" href="<?=$Empresa['yt']?>" title="YouTube" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
        <?php }else{ ?>
            <a class="logos_sociales" href="<?=$Empresa['yt']?>" title="YouTube" target="_blank"><img style="max-height:40px; max-width:40px; top:15px;" src="<?=$draizp?>/iconosRedes/<?=$Empresa['youtubeIcon']?>" class="fab fa-youtube fa-2x"></a>
        <?php }
    } ?>
    <?php if ($Empresa['lk'] != '') {
        if($Empresa['linkedinIcon'] == ''){ ?>
            <a class="logos_sociales" href="<?=$Empresa['lk']?>" title="LinkedIn" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
        <?php }else{ ?>
            <a class="logos_sociales" href="<?=$Empresa['lk']?>" title="LinkedIn" target="_blank"><img style="max-height:40px; max-width:40px; top:15px;" src="<?=$draizp?>/iconosRedes/<?=$Empresa['linkedinIcon']?>" class="fab fa-youtube fa-2x"></a>
        <?php }
    } ?>
</div>