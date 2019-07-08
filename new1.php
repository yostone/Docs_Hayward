
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/jeebase/assets/css/styles.css">
  <link rel="stylesheet" href="/jeebase/assets/css/materialize.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="Content-Language" content="pt-br">
</head>
<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper container">
        <a id="logo-container" href="https://www.jeedom.com/doc" class="brand-logo center"><img src="/jeebase/assets/images/logo.png" style="height:50px;margin-top:5px"></a>
        <ul class="left hide-on-med-and-down">
          <li><a href="https://www.jeedom.com/doc">Jeedom Documentation</a></li>
        </ul>
        <a href="https://www.jeedom.com/doc" data-activates="nav-mobile" class="button-collapse btn-floating btn-large waves-effect waves-light jeedomcolorbg"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="https://www.jeedom.com/site">Site</a></li>
          <li><a href="https://www.jeedom.com/blog">Blog</a></li>
          <li><a href="https://www.jeedom.com/forum">Forum</a></li>
          <li><a href="https://www.jeedom.com/market">Market</a></li>
          <li class="active"><a href="https://www.jeedom.com/doc">Doc</a></li>
        </ul>
        <ul class="side-nav" id="nav-mobile">
          <li><a href="https://www.jeedom.com/blog">Blog</a></li>
          <li><a href="https://www.jeedom.com/forum">Forum</a></li>
          <li><a href="https://www.jeedom.com/market">Market</a></li>
          <li class="active"><a href="https://www.jeedom.com/doc">Doc</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="row" id="div_main">
    <div id="side-nav" class="side-nav fixed">
      <div class="container">
       <div class="row">
        <div class="col s2">
          <i class="material-icons" style="position: relative;top:15px;">language</i>
        </div>
        <div class="col s10">
          <select class="sel_lang">
            
            
            <option data-href="index.html" value="fr_FR">Français</option>
            
            <option data-href="index-en_US.html" value="en_US">English</option>
            
            <option data-href="index-de_DE.html" value="de_DE">Deutsch</option>
            
            <option data-href="index-es_ES.html" value="es_ES">Spanish</option>
            
            
          </select>
        </div>
      </div>
    </div>
    <div id="div_summary" style="margin-top:-45px;padding-bottom: 45px;"></div>
  </div>
  <div>
    <i class="material-icons" id="bt_up" style="position:fixed;bottom:10px;right:10px;cursor: pointer;font-size:3em;">keyboard_arrow_up</i>
    <div class="hide-on-large-only" id='div_menuMobile'>
     <div class="row">
      <div class="col s2">
        <i class="material-icons" style="position: relative;top:15px;left:20px;">language</i>
      </div>
      <div class="col s10">
       <select class="sel_lang">
        
        
        <option value="fr_FR">Français</option>
        
        <option value="en_US">English</option>
        
        <option value="de_DE">Deutsch</option>
        
        <option value="es_ES">Spanish</option>
        
        
      </select>
    </div>
  </div>
  <div id="div_summary2"></div>
</div>
<div id="div_content">
  
<blockquote>
  <p><span style="color:red"><strong>UPDATE Fevrier 2019</strong></span></p>

  <p>Mise à jour importante du plugin pour se préparer à l’arrêt des serveurs . Pas d’impacte sur l’utilisation si vous avez déjà le plugin d’installer. Hormis pour ceux qui ont créé des équipements “custom” avant cette mise à jour. Il faut effacer ces équipements et en créer de nouveaux type “Autres” (Lire la documentation)</p>
</blockquote>

<h1 id="description">Description</h1>

<p>Ce plugin permet de récupérer toutes les sondes , actionneurs et sensors de votre zibase (Jusqu’à l’arrêt des serveurs).</p>

<p>Il est aussi possible de créer des équipements depuis le plugin .</p>

<p>Il est ensuite possible d’utiliser ces informations dans Jeedom</p>

<h1 id="utilisation">Utilisation</h1>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p><span style="color:red">Pour que le plugin fonctionne correctement il faut que les modules aient des ID unique quelque soit le protocole. Sinon cela peut interférer sur la bonne réception des information</span></p>
</blockquote>

<h1 id="installation">Installation</h1>

<ul>
  <li>
    <p>Télécharger le Plugin Jeebase sur le market.</p>
  </li>
  <li>
    <p>Activer le Plugin puis remplir les champs de configuration</p>
  </li>
</ul>

<p><img src="/jeebase/images/jeebase1.png" alt="jeebase1" /></p>

<ul>
  <li><strong>ip locale</strong> : Ip de jeedom</li>
</ul>

<p><strong>Enregistrer et créer les données en cliquant sur le bouton “synchroniser”</strong></p>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p>Il faut attendre au moins 1 minute que le démon se lance</p>
</blockquote>

<ul>
  <li>Aller maintenant dans l’onglet Plugins /monitoring/Jeebase</li>
</ul>

<p>Vous devriez retrouver tous vos équipements créés lors de la synchronisation.</p>

<p>Configurer l’objet pour qu’il soit visible sur le dashboard et ensuite vous aurez toutes les informations sur le dashboard</p>

<p><img src="/jeebase/images/jeebase2.png" alt="jeebase2" /></p>

<h1 id="les-actionneurs">Les Actionneurs</h1>

<h2 id="les-informations">Les informations</h2>

<p><img src="/jeebase/images/jeebase3.png" alt="jeebase3" /></p>

<ul>
  <li><strong>Identifiant Module</strong> : Identifiant qui doit être unique</li>
  <li><strong>Protocole</strong> : Le protocole du périphérique</li>
  <li><strong>Variateur</strong> : Cocher si dimmer</li>
  <li><strong>Somfy my</strong> : Cocher si protocole somfy rts . Cela créé la commande my qui a 2 fonction: arrêt si le store est en mouvement ou positionnement à la position préférée</li>
</ul>

<p>Possible aussi d’effectuer des actions lorsque la commande est reçu</p>

<ul>
  <li><strong>URL</strong> : Remplir le champs avec  une url valide (Utile en cas d’autre solution domotique par exemple)</li>
</ul>

<h2 id="les-commandes">Les Commandes</h2>

<p><img src="/jeebase/images/jeebase4.png" alt="jeebase4" /></p>

<blockquote>
  <p><span style="color:blue"><strong>NOTE</strong></span></p>

  <p>La table des commandes se remplie au fur et à mesure que le plugin reçoit les information</p>
</blockquote>

<h1 id="les-sondes">Les sondes</h1>

<p><img src="/jeebase/images/jeebase5.png" alt="jeebase5" /></p>

<p>Beaucoup plus de commandes que les actionneurs.</p>

<ul>
  <li><strong>bat</strong> : état de la batterie (Low ou OK)</li>
  <li><strong>Level</strong> : Niveau de réception RF (1 à 5 )</li>
  <li><strong>Noise</strong> : Bruit</li>
</ul>

<blockquote>
  <p><span style="color:blue"><strong>NOTE</strong></span></p>

  <p>La table des commandes se remplie au fur et à mesure que le plugin reçoit les information</p>

  <p>En cas de changement de pile , l’id peut changer. Il faut activer le mode debug et regarder le relevé d’activité. Changer l’id si besoin dans l’équipement . Ne pas oublier de remettre les logs par défaut si plus de nécessité.</p>
</blockquote>

<h1 id="les-détecteurs-sensors">Les Détecteurs (sensors)</h1>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p>Certains détecteurs(selon protocole mais zwave OK) ne remontent pas leur état. Pour cela reportez-vous aux équipement autre</p>
</blockquote>

<h1 id="les-équipements-autres">Les équipements “Autres”</h1>

<p>En plus des actionneurs,sondes et détecteurs il est possible de créer des équipements personnalisés. Cela peut-être utile pour:</p>

<ul>
  <li>Créer des actionneurs personnalisés</li>
  <li>Créer des détecteurs “particulier” ==&gt; avec un id ou 2 ids</li>
</ul>

<p>Pour cela cliquer sur le plus et choisir “Autres” dans la liste déroulante . Ne pas oublier de donner un nom à l’équipement.</p>

<p><img src="/jeebase/images/jeebase6.png" alt="jeebase6" /></p>

<p>L’équipement apparaît ensuite dans la liste. Aller dans l’onglet information</p>

<p><img src="/jeebase/images/jeebase7.png" alt="jeebase7" /></p>

<ul>
  <li><strong>Identifiant Actif</strong> : Correspond à la commande ON d’un actionneur</li>
  <li><strong>Identifiant inactif</strong> : Correspond à la commande OFF d’un actionneur (Ce Champs peut ne pas être rempli) . Utiliser le champs en dessous pour positionner l’équipement en position OFF</li>
  <li><strong>Temps RAZ (minutes)</strong> : Durée aprés lequel l’actionneur se positionnera en position OFF ( Utile pour les détecteurs avec un seul ID)</li>
  <li><strong>Refresh</strong> : Dernière RAZ ou prochaine si activé</li>
</ul>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p>Les ID sont uniques. Donc il ne faut pas qu’un autre équipement utilise le même ID sinon cela va retourner des valeurs erronées</p>
</blockquote>

<h1 id="les-logs">Les Logs</h1>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p>En mode <em>Debug</em> le plugin est très verbeux, il est recommandé d’utiliser ce mode seulement si vous devez diagnostiquer un problème particulier , rechercher un ID , en mode inclusion/exclusion</p>

  <p>Il faut redémarrer le démon aprés tout changement pour que cela soit effectif</p>
</blockquote>

<h2 id="le-log-jeebase_php">Le log jeebase_php</h2>

<p>Il est correspond au suivi d’activité de la zibase et n’est rempli que losque le mode debug est activé. C’est le plus important</p>

<p>Pour ouvrir la fenêtre aller dans la configuration générale du plugin et cliquer sur le bouton jeebase_php</p>

<p><img src="/jeebase/images/jeebase8.png" alt="jeebase8" /></p>

<p><img src="/jeebase/images/jeebase9.png" alt="jeebase9" /></p>

<h1 id="gestion-des-batteries">Gestion des batteries</h1>

<p>La zibase ne renvoit que 2 états Low et OK.</p>

<p>La gestion des batteries passent par jeedom.</p>

<p>Pour cela il faut aller dans la configuration générale via la roue crantée en haut à droite puis configuration.</p>

<p><img src="/jeebase/images/jeebase10.png" alt="jeebase10" /></p>

<p>Dans l’exemple ci-dessus j’ai placé le niveau d’alerte sur 15. Si vous avez d’autres valeurs ne rien changer.</p>

<p>Ensuite aller dans la configuration du plugin</p>

<p><img src="/jeebase/images/jeebase11.png" alt="jeebase11" /></p>

<p>Et remplir le champs concernant la batterie. ici j’ai mis 10 , une valeur inférieur au niveau warning (15 précédemment)</p>

<h1 id="ajouter-un-équipement">Ajouter un équipement</h1>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p><span style="color:red">Pour rappel , l’ID doit être unique quelque soit le protocole. Sinon cela peut interférer sur la bonne réception des information</span></p>
</blockquote>

<h2 id="depuis-la-zibase">Depuis la zibase</h2>

<ul>
  <li>Suivre la procédure habituelle et une fois terminée ,synchroniser les équipements dans la configuration générale du plugin</li>
</ul>

<h2 id="depuis-le-plugin">Depuis le plugin</h2>
<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p><span style="color:red">Bien suivre les étapes pour la réussite de l’opération. Pour rappel l’id doit être unique dans le plugin</span></p>
</blockquote>

<p>###Inclusion###</p>

<ul>
  <li>
    <p>Mettre les logs du plugin en mode debug,Redémarrer le démon pour que cela soit effectif</p>
  </li>
  <li>
    <p>Créer un équipement</p>
  </li>
  <li>
    <p>Choisir l’id et le protocole</p>
  </li>
</ul>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p>Pour le Zwave il ne faut pas d’ID car sera déterminé par le controleur</p>

  <p>Pour les périphériques somfy , il faut choisir les identifiants C1 à C16 et/ou D1 à D16</p>

  <p>Pour les périphériques X2D, il est conseillé d’utiliser les groupes A1 à A16 et/ou B1 à B16</p>
</blockquote>

<ul>
  <li>
    <p>Enregistrer la configuration</p>
  </li>
  <li>
    <p>Déroulement de l’inclusion</p>
  </li>
</ul>

<p><strong>Si besoin , Appuyer sur le bouton d’apprentissage du récepteur. (voir procédure selon protocole)</strong></p>

<p><strong>Cliquer ensuite rapidement sur le bouton inclusion de l’équipement</strong></p>

<ul>
  <li>Récupérer les informations</li>
</ul>

<p>Hors Zwave: Votre module doit être inclus . Vous pouvez l’utiliser dans jeedom.</p>

<p>Zwave : Il faut récupérer l’id que vous allez voir dans le relevé d’activité et l’ajouter à l’équipement. Certains modules permettent de récupérer la température , l’humidité , la luminosité. Idem lors de la confirmation les ids sont notifiés. Il faut en plus créer des équipements(sondes en générale) avec l’ID récupéré</p>

<ul>
  <li>Terminer le processus</li>
</ul>

<blockquote>
  <p><span style="color:red"><strong>IMPORTANT</strong></span></p>

  <p><span style="color:red">Aprés la fin de/des inclusions , ne pas oublier de mettre les logs du plugin sur défaut selon votre besoin et au cas ou Redémarrer le démon </span></p>
</blockquote>

<p>###Exclusion (Zwave seulement)###</p>

<ul>
  <li>
    <p>Mettre les logs du plugin en mode debug . Redémarrer le démon pour que cela soit effectif</p>
  </li>
  <li>
    <p>Aller sur l’équipement à exclure et cliquer sur bouton “Exclusion”. La zibase se met en mode exclusion</p>
  </li>
  <li>
    <p>Effectuer les actions spécifiques au module.</p>
  </li>
  <li>
    <p>Le relevé d’activité confirme la bonne réussite de l’opération.Ne pas oublier de mettre les logs du plugin sur défaut selon votre besoin et au cas ou Redémarrer le démon</p>
  </li>
</ul>

<blockquote>
  <p><span style="color:blue"><strong>NOTE</strong></span></p>

  <p>Si vous n’avaz pas de module Zwave et voulez l’exclure , il faut créer un équipement , ne pas mettre d’id mais le protocole “Zwave” . Enregistrer puis cliquer sur exclusion.</p>
</blockquote>

<h1 id="troubleshooting">Troubleshooting</h1>

<h2 id="le-démon-ne-démarre-pas">Le démon ne démarre pas</h2>
<ul>
  <li>Vérifier que les informations de connexion sont exactes</li>
  <li>Vérifier les logs jeebase ,jeebase_php , http.error pour contrôler s’il y a une erreur</li>
</ul>

<h2 id="détecteur-ne-remonte-pas-linformation">Détecteur ne remonte pas l’information</h2>
<ul>
  <li>Se référer aux chapitres sur les équipements “Autres”</li>
</ul>

<h2 id="je-ne-connais-pas-lid-de-mon-module">Je ne connais pas l’ID de mon module</h2>

<ul>
  <li>Utiliser le mode debug (se référer aux chapitres sur les logs) puis activer/stimuler le pour vérifier les informations dans les logs jeebase_php</li>
</ul>

<h2 id="le-forum">Le forum</h2>

<ul>
  <li>Pour toutes questions , ne pas hésitez à poster sur le fil officiel du plugin 
<a href="https://www.jeedom.com/forum/viewtopic.php?f=184&amp;t=2471">Cliquer ICI</a></li>
</ul>


</div>
</div>
</div>
<script type="text/javascript" src="/jeebase/assets/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/jeebase/assets/js/materialize.min.js"></script>
<script type="text/javascript" src="/jeebase/assets/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="/jeebase/assets/js/jquery.toc.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
   var title = 'jeebase';
   title = title.replace('plugin-','');
   $('#doc_title').append(title[0].toUpperCase() + title.substring(1))
      document.title = 'Documentation '+ title[0].toUpperCase() + title.substring(1)
   $(".button-collapse").sideNav();
   $('img').addClass('responsive-img');
   $('#div_content table').addClass('striped');
   init();
   var regex = /\/([a-z]{2}_[A-Z]{2})\//g;
   var corresp  = regex.exec(window.location.href)
   if(corresp !== null && corresp[1]){
    $('.sel_lang').val(corresp[1])
  }
  $('select').material_select();
  $('.sel_lang').on('change',function(){
    var regex = /\/([a-z]{2}_[A-Z]{2})\//g;
    var corresp  = regex.exec(window.location.href);
    window.location.href =  window.location.href.replace(corresp[1], $(this).find('option:selected').attr('value'));
  })
  $('#bt_up').on('click',function(){
    window.scrollTo(0, 0);
  })
  $(window).on("orientationchange", function (event) {
    init();
  });
  $(window).on("resize", function (event) {
    init();
  });
  function init(){
    $('#div_summary2,#div_summary').empty();
    var titlePlugin = title.charAt(0).toUpperCase() + title.substring(1).toLowerCase()
    if(window.innerWidth < 992){
      $('#div_main').addClass('container');
      $('#div_content').toc({
        renderIn : "#div_summary2",
        selectors : 'h1,h2'
      });
    }else{
     $('#div_main').removeClass('container');
     $('#div_content').toc({
      renderIn : "#div_summary",
      selectors : 'h1,h2'
    });
   }
   $('#toctitle').html('<h2 style="padding-left:5px !important;">'+titlePlugin+'</h2>');
   $('.toclevel-2').parent().css('color', 'blue');
 }
 var i = 1, j = 1;
 $('h1, h2', $('#div_content')).each(function(){
  if($(this)[0].tagName.toLowerCase() == 'h1'){
    $('#'+$(this).attr('id')).text(i + ') ' + $(this).text());
    i++;
  } 
  if($(this)[0].tagName.toLowerCase() == 'h2'){
    $('#'+$(this).attr('id')).text( (i-1) + '.' + j + ') ' + $(this).text()); 
    j++;
  }else{
    j = 1;
  }
});  
});

  var idChapitre = null, nbrChapitre = 0, idAncre = null;
  $('#div_content h1, #div_content h2').on('inview',function(event, isInView){
    nbrChapitre = $('a.active').length;
    idAncre = $(this).attr('id');
    if(isInView){
      $('a[href="#'+ idAncre +'"]').addClass('active');
      if(idChapitre != null){
        $('a[href="#'+ idChapitre +'"]').removeClass('active');
        idChapitre = null;
      }
    }else if (nbrChapitre > 1){
      $('a[href="#'+ idAncre +'"]').removeClass('active');
    }else{
      idChapitre = idAncre;
    }
  });
</script>
</body>
</html>
