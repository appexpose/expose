<?php
ini_set('max_execution_time', 300);
define('PATH', '../../server/app/');
include(PATH."include/inbd.php");
$page_path="WS::BDCreation";

$timestamp="1410000000";

function getTimestamp(){
  global $timestamp;

  $timestamp+=20;
  return $timestamp;
}

$brand_usernames[]="iaculisconsulting";
$brand_names[]="Iaculis Consulting";
$brand_descriptions[]="Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
$brand_phones[]="902097647";
$admin_fnames[]="Sharonda";
$admin_lnames[]="Leicht";
$admin_emails[]="sharonda@iaculisconsulting.com";


$brand_usernames[]="dolor";
$brand_names[]="Dolor Limited";
$brand_descriptions[]="Phasellus vestibulum urna eget dictum efficitur.";
$brand_phones[]="902286766";
$admin_fnames[]="Monte";
$admin_lnames[]="Cimino";
$admin_emails[]="monte@dolor.com";


$brand_usernames[]="facilisisegetipsum";
$brand_names[]="Facilisis Eget Ipsum Inc.";
$brand_descriptions[]="Fusce pharetra velit ut odio ultricies rhoncus.";
$brand_phones[]="902217882";
$admin_fnames[]="Anjelica";
$admin_lnames[]="Searles";
$admin_emails[]="anjelica@facilisisegetipsum.com";


$brand_usernames[]="quamcompany";
$brand_names[]="Quam Company";
$brand_descriptions[]="Integer dignissim sapien in nunc ullamcorper sodales.";
$brand_phones[]="902475500";
$admin_fnames[]="Johnathon";
$admin_lnames[]="Haywood";
$admin_emails[]="johnathon@quamcompany.com";


$brand_usernames[]="consequat";
$brand_names[]="Consequat Incorporated";
$brand_descriptions[]="Nam gravida quam et eros vestibulum, ultricies ornare sem ullamcorper.";
$brand_phones[]="902164225";
$admin_fnames[]="Monika";
$admin_lnames[]="Davenport";
$admin_emails[]="monika@consequat.com";


$brand_usernames[]="consectetuercursuset";
$brand_names[]="Consectetuer Cursus Et LLC";
$brand_descriptions[]="Nunc dictum nisi nec pretium tincidunt.";
$brand_phones[]="902233852";
$admin_fnames[]="Estela";
$admin_lnames[]="Ginsberg";
$admin_emails[]="estela@consectetuercursuset.com";


$brand_usernames[]="arcuacfoundation";
$brand_names[]="Arcu Ac Foundation";
$brand_descriptions[]="Integer at dolor eu diam vulputate tempus.";
$brand_phones[]="902107229";
$admin_fnames[]="Florence";
$admin_lnames[]="Rodriques";
$admin_emails[]="florence@arcuacfoundation.com";


$brand_usernames[]="sedmalesuada";
$brand_names[]="Sed Malesuada Limited";
$brand_descriptions[]="Sed ut augue vitae augue bibendum vehicula id non nulla.";
$brand_phones[]="902386329";
$admin_fnames[]="Nanette";
$admin_lnames[]="Heideman";
$admin_emails[]="nanette@sedmalesuada.com";


$brand_usernames[]="nuncnullapc";
$brand_names[]="Nunc Nulla PC";
$brand_descriptions[]="Quisque id nisl rutrum, suscipit lacus eu, aliquet odio.";
$brand_phones[]="902399587";
$admin_fnames[]="Rosalie";
$admin_lnames[]="Burnes";
$admin_emails[]="rosalie@nuncnullapc.com";


$brand_usernames[]="mauriscompany";
$brand_names[]="Mauris Company";
$brand_descriptions[]="Nam porttitor nulla in sollicitudin elementum.";
$brand_phones[]="902431670";
$admin_fnames[]="Allyn";
$admin_lnames[]="Florence";
$admin_emails[]="allyn@mauriscompany.com";


$brand_usernames[]="seddolorinstitute";
$brand_names[]="Sed Dolor Institute";
$brand_descriptions[]="Nulla quis dolor aliquam, gravida est maximus, sagittis orci.";
$brand_phones[]="902400912";
$admin_fnames[]="Stanley";
$admin_lnames[]="Bastarache";
$admin_emails[]="stanley@seddolorinstitute.com";


$brand_usernames[]="vitaesemperegestas";
$brand_names[]="Vitae Semper Egestas Ltd";
$brand_descriptions[]="Integer sed odio sit amet tellus interdum gravida.";
$brand_phones[]="902864486";
$admin_fnames[]="Denny";
$admin_lnames[]="Waggener";
$admin_emails[]="denny@vitaesemperegestas.com";


$brand_usernames[]="suspendisseseddolor";
$brand_names[]="Suspendisse Sed Dolor Limited";
$brand_descriptions[]="Mauris at sem et mauris sollicitudin placerat id quis augue.";
$brand_phones[]="902344707";
$admin_fnames[]="Penni";
$admin_lnames[]="Contreras";
$admin_emails[]="penni@suspendisseseddolor.com";


$brand_usernames[]="doneccorp.";
$brand_names[]="Donec Corp.";
$brand_descriptions[]="Proin in mauris a justo porttitor tincidunt ut in dolor.";
$brand_phones[]="902620322";
$admin_fnames[]="Leoma";
$admin_lnames[]="Pedone";
$admin_emails[]="leoma@doneccorp..com";


$brand_usernames[]="pedecrasvulputatecorporation";
$brand_names[]="Pede Cras Vulputate Corporation";
$brand_descriptions[]="Integer gravida dui eu ante euismod, et porta nisl dignissim.";
$brand_phones[]="902968456";
$admin_fnames[]="Britt";
$admin_lnames[]="Leboeuf";
$admin_emails[]="britt@pedecrasvulputatecorporation.com";


$brand_usernames[]="duiscursusdiam";
$brand_names[]="Duis Cursus Diam Incorporated";
$brand_descriptions[]="Nulla viverra libero ut interdum maximus.";
$brand_phones[]="902907885";
$admin_fnames[]="Wendy";
$admin_lnames[]="Luera";
$admin_emails[]="wendy@duiscursusdiam.com";


$brand_usernames[]="gravidapraesent";
$brand_names[]="Gravida Praesent LLC";
$brand_descriptions[]="Nunc ut turpis vitae felis venenatis tincidunt ut sed mi.";
$brand_phones[]="902183693";
$admin_fnames[]="Cleta";
$admin_lnames[]="Hoos";
$admin_emails[]="cleta@gravidapraesent.com";


$brand_usernames[]="sollicitudinadipiscing";
$brand_names[]="Sollicitudin Adipiscing Inc.";
$brand_descriptions[]="Nulla auctor nisl et porttitor rutrum.";
$brand_phones[]="902934293";
$admin_fnames[]="Jamee";
$admin_lnames[]="Garay";
$admin_emails[]="jamee@sollicitudinadipiscing.com";


$brand_usernames[]="sit";
$brand_names[]="Sit Incorporated";
$brand_descriptions[]="Nunc facilisis magna sit amet arcu consectetur, non blandit sapien tempor.";
$brand_phones[]="902150951";
$admin_fnames[]="Rosita";
$admin_lnames[]="Rimes";
$admin_emails[]="rosita@sit.com";


$brand_usernames[]="uttinciduntassociates";
$brand_names[]="Ut Tincidunt Associates";
$brand_descriptions[]="Phasellus eu turpis euismod, porta dui sed, posuere leo.";
$brand_phones[]="902065128";
$admin_fnames[]="Mauro";
$admin_lnames[]="Gambill";
$admin_emails[]="mauro@uttinciduntassociates.com";


$brand_usernames[]="nislquisquellp";
$brand_names[]="Nisl Quisque LLP";
$brand_descriptions[]="Donec et arcu vitae augue pharetra interdum in et purus.";
$brand_phones[]="902458620";
$admin_fnames[]="Mireya";
$admin_lnames[]="Sprung";
$admin_emails[]="mireya@nislquisquellp.com";


$brand_usernames[]="diam";
$brand_names[]="Diam Incorporated";
$brand_descriptions[]="Aenean tempor ligula eu nisi interdum, eu laoreet mauris congue.";
$brand_phones[]="902666003";
$admin_fnames[]="Doria";
$admin_lnames[]="Altizer";
$admin_emails[]="doria@diam.com";


$brand_usernames[]="cursusnonegestas";
$brand_names[]="Cursus Non Egestas Limited";
$brand_descriptions[]="Donec vel odio non augue ultricies commodo.";
$brand_phones[]="902583870";
$admin_fnames[]="Kayleen";
$admin_lnames[]="Butts";
$admin_emails[]="kayleen@cursusnonegestas.com";


$brand_usernames[]="metus";
$brand_names[]="Metus Ltd";
$brand_descriptions[]="Fusce eleifend odio ut diam finibus, et euismod leo condimentum.";
$brand_phones[]="902432515";
$admin_fnames[]="Aleisha";
$admin_lnames[]="Barron";
$admin_emails[]="aleisha@metus.com";


$brand_usernames[]="acfacilisispc";
$brand_names[]="Ac Facilisis PC";
$brand_descriptions[]="Fusce ac sapien vel massa tincidunt porttitor eget ut nisi.";
$brand_phones[]="902386424";
$admin_fnames[]="Krystal";
$admin_lnames[]="Brabham";
$admin_emails[]="krystal@acfacilisispc.com";


$brand_usernames[]="quisquevariusllp";
$brand_names[]="Quisque Varius LLP";
$brand_descriptions[]="Proin et ipsum in ligula bibendum feugiat.";
$brand_phones[]="902570232";
$admin_fnames[]="Joella";
$admin_lnames[]="Reynoso";
$admin_emails[]="joella@quisquevariusllp.com";


$brand_usernames[]="luctuscurabituregestas";
$brand_names[]="Luctus Curabitur Egestas Ltd";
$brand_descriptions[]="Nunc venenatis massa id arcu sodales, eget auctor ligula ultricies.";
$brand_phones[]="902025210";
$admin_fnames[]="Lahoma";
$admin_lnames[]="Ates";
$admin_emails[]="lahoma@luctuscurabituregestas.com";


$brand_usernames[]="tellussuspendissesed";
$brand_names[]="Tellus Suspendisse Sed Incorporated";
$brand_descriptions[]="Aenean tincidunt erat at neque pellentesque sagittis.";
$brand_phones[]="902877783";
$admin_fnames[]="Alejandro";
$admin_lnames[]="Sneller";
$admin_emails[]="alejandro@tellussuspendissesed.com";


$brand_usernames[]="non";
$brand_names[]="Non Inc.";
$brand_descriptions[]="Nam scelerisque velit sit amet eros accumsan, vel lobortis lorem aliquam.";
$brand_phones[]="902782374";
$admin_fnames[]="Sherise";
$admin_lnames[]="Weatherman";
$admin_emails[]="sherise@non.com";


$brand_usernames[]="duinecinstitute";
$brand_names[]="Dui Nec Institute";
$brand_descriptions[]="Praesent vel diam gravida, suscipit diam vitae, tempus orci.";
$brand_phones[]="902303439";
$admin_fnames[]="Delorse";
$admin_lnames[]="Takacs";
$admin_emails[]="delorse@duinecinstitute.com";


$brand_usernames[]="nuncullamcorpercorp.";
$brand_names[]="Nunc Ullamcorper Corp.";
$brand_descriptions[]="Proin laoreet eros ac molestie pulvinar.";
$brand_phones[]="902261105";
$admin_fnames[]="Sharon";
$admin_lnames[]="Vollmer";
$admin_emails[]="sharon@nuncullamcorpercorp..com";


$brand_usernames[]="neccorporation";
$brand_names[]="Nec Corporation";
$brand_descriptions[]="Sed convallis nisi sed neque varius tempor ac dignissim leo.";
$brand_phones[]="902425145";
$admin_fnames[]="Xenia";
$admin_lnames[]="Saffer";
$admin_emails[]="xenia@neccorporation.com";


$brand_usernames[]="duiassociates";
$brand_names[]="Dui Associates";
$brand_descriptions[]="Nullam vulputate quam maximus elementum ullamcorper.";
$brand_phones[]="902279891";
$admin_fnames[]="Enrique";
$admin_lnames[]="Sanfilippo";
$admin_emails[]="enrique@duiassociates.com";


$brand_usernames[]="mitemporlorem";
$brand_names[]="Mi Tempor Lorem Inc.";
$brand_descriptions[]="Praesent dignissim felis ac dui tempus, sed dapibus augue ultricies.";
$brand_phones[]="902159586";
$admin_fnames[]="Laura";
$admin_lnames[]="Seavey";
$admin_emails[]="laura@mitemporlorem.com";


$brand_usernames[]="erospc";
$brand_names[]="Eros PC";
$brand_descriptions[]="Mauris id orci dapibus, eleifend nibh ac, aliquet elit.";
$brand_phones[]="902397968";
$admin_fnames[]="Benton";
$admin_lnames[]="Gartland";
$admin_emails[]="benton@erospc.com";


$brand_usernames[]="duiquisaccumsanassociates";
$brand_names[]="Dui Quis Accumsan Associates";
$brand_descriptions[]="Mauris at nisl egestas, euismod erat vitae, aliquet nisl.";
$brand_phones[]="902767112";
$admin_fnames[]="Regenia";
$admin_lnames[]="Bejarano";
$admin_emails[]="regenia@duiquisaccumsanassociates.com";


$brand_usernames[]="dis";
$brand_names[]="Dis Ltd";
$brand_descriptions[]="In cursus massa ut purus tincidunt, ut blandit ipsum bibendum.";
$brand_phones[]="902333785";
$admin_fnames[]="Bryce";
$admin_lnames[]="Cassady";
$admin_emails[]="bryce@dis.com";


$brand_usernames[]="diamproindolor";
$brand_names[]="Diam Proin Dolor LLC";
$brand_descriptions[]="Nulla hendrerit ipsum in massa mollis euismod.";
$brand_phones[]="902955757";
$admin_fnames[]="Rosy";
$admin_lnames[]="Pearsall";
$admin_emails[]="rosy@diamproindolor.com";


$brand_usernames[]="semperegestasurna";
$brand_names[]="Semper Egestas Urna LLC";
$brand_descriptions[]="Vestibulum elementum sapien sed tincidunt interdum.";
$brand_phones[]="902946555";
$admin_fnames[]="Mora";
$admin_lnames[]="Port";
$admin_emails[]="mora@semperegestasurna.com";


$brand_usernames[]="arcueucorporation";
$brand_names[]="Arcu Eu Corporation";
$brand_descriptions[]="Nullam a nulla tempor, volutpat purus euismod, sollicitudin dolor.";
$brand_phones[]="902483023";
$admin_fnames[]="Ellena";
$admin_lnames[]="Holzman";
$admin_emails[]="ellena@arcueucorporation.com";


$brand_usernames[]="ultricesvivamusrhoncusassociates";
$brand_names[]="Ultrices Vivamus Rhoncus Associates";
$brand_descriptions[]="Praesent quis augue iaculis justo gravida interdum nec a magna.";
$brand_phones[]="902579094";
$admin_fnames[]="Beata";
$admin_lnames[]="Fritsch";
$admin_emails[]="beata@ultricesvivamusrhoncusassociates.com";


$brand_usernames[]="risusinmiconsulting";
$brand_names[]="Risus In Mi Consulting";
$brand_descriptions[]="Vestibulum molestie nunc nec dui molestie, eu sollicitudin turpis imperdiet.";
$brand_phones[]="902741067";
$admin_fnames[]="Ailene";
$admin_lnames[]="Westerman";
$admin_emails[]="ailene@risusinmiconsulting.com";


$brand_usernames[]="scelerisquenequenullam";
$brand_names[]="Scelerisque Neque Nullam Ltd";
$brand_descriptions[]="Suspendisse feugiat massa in diam commodo pellentesque.";
$brand_phones[]="902740087";
$admin_fnames[]="Brinda";
$admin_lnames[]="Mingle";
$admin_emails[]="brinda@scelerisquenequenullam.com";


$brand_usernames[]="placeratcraspc";
$brand_names[]="Placerat Cras PC";
$brand_descriptions[]="Cras volutpat neque ut diam dignissim vestibulum et a nisi.";
$brand_phones[]="902522845";
$admin_fnames[]="Morgan";
$admin_lnames[]="Delossantos";
$admin_emails[]="morgan@placeratcraspc.com";


$brand_usernames[]="amet";
$brand_names[]="Amet Incorporated";
$brand_descriptions[]="Sed sodales nibh vitae posuere porttitor.";
$brand_phones[]="902920607";
$admin_fnames[]="Lucille";
$admin_lnames[]="Kendricks";
$admin_emails[]="lucille@amet.com";


$brand_usernames[]="feugiatnecdiam";
$brand_names[]="Feugiat Nec Diam Incorporated";
$brand_descriptions[]="Sed vel dolor a ex vestibulum interdum et nec elit.";
$brand_phones[]="902392868";
$admin_fnames[]="Merrie";
$admin_lnames[]="Bitton";
$admin_emails[]="merrie@feugiatnecdiam.com";


$brand_usernames[]="commodo";
$brand_names[]="Commodo Limited";
$brand_descriptions[]="Maecenas ac nunc eget ligula convallis eleifend.";
$brand_phones[]="902473310";
$admin_fnames[]="Melissa";
$admin_lnames[]="Belcher";
$admin_emails[]="melissa@commodo.com";


$brand_usernames[]="convallisassociates";
$brand_names[]="Convallis Associates";
$brand_descriptions[]="Suspendisse ac leo vitae enim scelerisque egestas.";
$brand_phones[]="902610945";
$admin_fnames[]="Johnny";
$admin_lnames[]="Olmedo";
$admin_emails[]="johnny@convallisassociates.com";


$brand_usernames[]="enimsuspendissepc";
$brand_names[]="Enim Suspendisse PC";
$brand_descriptions[]="Suspendisse ultrices diam ac sapien gravida efficitur.";
$brand_phones[]="902710680";
$admin_fnames[]="Tori";
$admin_lnames[]="Arreguin";
$admin_emails[]="tori@enimsuspendissepc.com";


$brand_usernames[]="libero";
$brand_names[]="Libero LLC";
$brand_descriptions[]="Suspendisse tincidunt tellus sit amet gravida egestas.";
$brand_phones[]="902211218";
$admin_fnames[]="Cierra";
$admin_lnames[]="Garn";
$admin_emails[]="cierra@libero.com";


$brand_usernames[]="acmetuscompany";
$brand_names[]="Ac Metus Company";
$brand_descriptions[]="Proin feugiat tortor at egestas scelerisque.";
$brand_phones[]="902510952";
$admin_fnames[]="Brigid";
$admin_lnames[]="Delawder";
$admin_emails[]="brigid@acmetuscompany.com";


$brand_usernames[]="auctorvitaecorporation";
$brand_names[]="Auctor Vitae Corporation";
$brand_descriptions[]="Phasellus vel nunc eu elit mollis suscipit sit amet et leo.";
$brand_phones[]="902566840";
$admin_fnames[]="Gustavo";
$admin_lnames[]="Mcgray";
$admin_emails[]="gustavo@auctorvitaecorporation.com";


$brand_usernames[]="nullamenimsed";
$brand_names[]="Nullam Enim Sed Limited";
$brand_descriptions[]="Praesent vel nulla vitae augue consectetur tincidunt.";
$brand_phones[]="902632679";
$admin_fnames[]="Antone";
$admin_lnames[]="Sardina";
$admin_emails[]="antone@nullamenimsed.com";


$brand_usernames[]="elitfermentumrisusfoundation";
$brand_names[]="Elit Fermentum Risus Foundation";
$brand_descriptions[]="Phasellus a libero in massa tempor interdum in nec justo.";
$brand_phones[]="902322402";
$admin_fnames[]="Russ";
$admin_lnames[]="Jun";
$admin_emails[]="russ@elitfermentumrisusfoundation.com";


$brand_usernames[]="purusduiscorporation";
$brand_names[]="Purus Duis Corporation";
$brand_descriptions[]="Praesent facilisis tellus nec commodo dignissim.";
$brand_phones[]="902780914";
$admin_fnames[]="Athena";
$admin_lnames[]="Winslett";
$admin_emails[]="athena@purusduiscorporation.com";


$brand_usernames[]="senectusetnetuscompany";
$brand_names[]="Senectus Et Netus Company";
$brand_descriptions[]="Mauris nec lectus euismod, blandit orci luctus, malesuada magna.";
$brand_phones[]="902136803";
$admin_fnames[]="Ignacio";
$admin_lnames[]="Lasso";
$admin_emails[]="ignacio@senectusetnetuscompany.com";


$brand_usernames[]="utipsumac";
$brand_names[]="Ut Ipsum Ac Limited";
$brand_descriptions[]="Aenean sit amet nibh nec lectus egestas molestie a sed augue.";
$brand_phones[]="902717260";
$admin_fnames[]="Leonore";
$admin_lnames[]="Knebel";
$admin_emails[]="leonore@utipsumac.com";


$brand_usernames[]="fusce";
$brand_names[]="Fusce Limited";
$brand_descriptions[]="Maecenas eu nunc eleifend, vehicula arcu eu, finibus mauris.";
$brand_phones[]="902727201";
$admin_fnames[]="Ali";
$admin_lnames[]="Mara";
$admin_emails[]="ali@fusce.com";


$brand_usernames[]="idcorp.";
$brand_names[]="Id Corp.";
$brand_descriptions[]="In vestibulum enim sed dui volutpat, ac luctus mauris convallis.";
$brand_phones[]="902883201";
$admin_fnames[]="Isa";
$admin_lnames[]="Bolden";
$admin_emails[]="isa@idcorp..com";


$brand_usernames[]="malesuadaindustries";
$brand_names[]="Malesuada Industries";
$brand_descriptions[]="Vivamus ullamcorper ex non dictum bibendum.";
$brand_phones[]="902773433";
$admin_fnames[]="Temeka";
$admin_lnames[]="Romney";
$admin_emails[]="temeka@malesuadaindustries.com";


$brand_usernames[]="etiamindustries";
$brand_names[]="Etiam Industries";
$brand_descriptions[]="Cras imperdiet neque sit amet nisi venenatis, viverra viverra urna condimentum.";
$brand_phones[]="902434310";
$admin_fnames[]="Laurette";
$admin_lnames[]="Wagoner";
$admin_emails[]="laurette@etiamindustries.com";


$brand_usernames[]="cursusintegerassociates";
$brand_names[]="Cursus Integer Associates";
$brand_descriptions[]="Praesent non nibh auctor, luctus magna et, pharetra enim.";
$brand_phones[]="902876793";
$admin_fnames[]="Keira";
$admin_lnames[]="Delk";
$admin_emails[]="keira@cursusintegerassociates.com";


$brand_usernames[]="rutrummagnacrasassociates";
$brand_names[]="Rutrum Magna Cras Associates";
$brand_descriptions[]="Suspendisse auctor nisi vel ligula placerat, non bibendum dolor finibus.";
$brand_phones[]="902930551";
$admin_fnames[]="Abbie";
$admin_lnames[]="Troiano";
$admin_emails[]="abbie@rutrummagnacrasassociates.com";


$brand_usernames[]="pedeconsulting";
$brand_names[]="Pede Consulting";
$brand_descriptions[]="Suspendisse lobortis velit et erat hendrerit, a ultrices ex aliquam.";
$brand_phones[]="902844297";
$admin_fnames[]="Rocco";
$admin_lnames[]="Spink";
$admin_emails[]="rocco@pedeconsulting.com";


$brand_usernames[]="nullamscelerisquecorp.";
$brand_names[]="Nullam Scelerisque Corp.";
$brand_descriptions[]="Quisque ut mi et purus suscipit vestibulum.";
$brand_phones[]="902389173";
$admin_fnames[]="Gerald";
$admin_lnames[]="Talmage";
$admin_emails[]="gerald@nullamscelerisquecorp..com";


$brand_usernames[]="risusquis";
$brand_names[]="Risus Quis LLC";
$brand_descriptions[]="Pellentesque quis tortor blandit, aliquam nisl quis, sodales dui.";
$brand_phones[]="902521422";
$admin_fnames[]="Susy";
$admin_lnames[]="Gerrish";
$admin_emails[]="susy@risusquis.com";


$brand_usernames[]="commodocorp.";
$brand_names[]="Commodo Corp.";
$brand_descriptions[]="Proin a mi viverra, semper orci et, iaculis sapien.";
$brand_phones[]="902623345";
$admin_fnames[]="Gaylene";
$admin_lnames[]="Hiebert";
$admin_emails[]="gaylene@commodocorp..com";


$brand_usernames[]="interdumcurabiturdictum";
$brand_names[]="Interdum Curabitur Dictum Limited";
$brand_descriptions[]="Morbi venenatis libero quis est lobortis pharetra id ac eros.";
$brand_phones[]="902024527";
$admin_fnames[]="Yaeko";
$admin_lnames[]="Millan";
$admin_emails[]="yaeko@interdumcurabiturdictum.com";


$brand_usernames[]="etiam";
$brand_names[]="Etiam Incorporated";
$brand_descriptions[]="Etiam sodales mauris ac ipsum laoreet, et malesuada massa dignissim.";
$brand_phones[]="902023501";
$admin_fnames[]="Alva";
$admin_lnames[]="Hanner";
$admin_emails[]="alva@etiam.com";


$brand_usernames[]="mitemporloremconsulting";
$brand_names[]="Mi Tempor Lorem Consulting";
$brand_descriptions[]="Proin eget est cursus nisi sagittis laoreet.";
$brand_phones[]="902871171";
$admin_fnames[]="Melodie";
$admin_lnames[]="Stull";
$admin_emails[]="melodie@mitemporloremconsulting.com";


$brand_usernames[]="doneccorporation";
$brand_names[]="Donec Corporation";
$brand_descriptions[]="Quisque venenatis mauris sagittis fringilla suscipit.";
$brand_phones[]="902898167";
$admin_fnames[]="Shiloh";
$admin_lnames[]="Kleine";
$admin_emails[]="shiloh@doneccorporation.com";


$brand_usernames[]="dictumpc";
$brand_names[]="Dictum PC";
$brand_descriptions[]="Cras varius diam eget lorem tincidunt, et ornare turpis finibus.";
$brand_phones[]="902930809";
$admin_fnames[]="Nola";
$admin_lnames[]="Shomo";
$admin_emails[]="nola@dictumpc.com";


$brand_usernames[]="mollislectuspede";
$brand_names[]="Mollis Lectus Pede Ltd";
$brand_descriptions[]="Aliquam porta nibh eu eros scelerisque pretium.";
$brand_phones[]="902579398";
$admin_fnames[]="Joyce";
$admin_lnames[]="Stiefel";
$admin_emails[]="joyce@mollislectuspede.com";


$brand_usernames[]="donecelementumloremassociates";
$brand_names[]="Donec Elementum Lorem Associates";
$brand_descriptions[]="Phasellus pharetra ligula congue molestie cursus.";
$brand_phones[]="902406015";
$admin_fnames[]="Yer";
$admin_lnames[]="Canipe";
$admin_emails[]="yer@donecelementumloremassociates.com";


$brand_usernames[]="quisqueornareassociates";
$brand_names[]="Quisque Ornare Associates";
$brand_descriptions[]="Maecenas nec nisl posuere, vestibulum leo at, ultrices dui.";
$brand_phones[]="902239330";
$admin_fnames[]="Sanjuana";
$admin_lnames[]="Spires";
$admin_emails[]="sanjuana@quisqueornareassociates.com";


$brand_usernames[]="duisamiindustries";
$brand_names[]="Duis A Mi Industries";
$brand_descriptions[]="Nullam sed sem ac mauris pharetra ultricies.";
$brand_phones[]="902118640";
$admin_fnames[]="Dena";
$admin_lnames[]="Kettle";
$admin_emails[]="dena@duisamiindustries.com";


$brand_usernames[]="egestas";
$brand_names[]="Egestas Incorporated";
$brand_descriptions[]="Vestibulum eu mauris ac erat convallis venenatis ut ut sem.";
$brand_phones[]="902311721";
$admin_fnames[]="Christopher";
$admin_lnames[]="Layne";
$admin_emails[]="christopher@egestas.com";


$brand_usernames[]="pharetraquisquecorp.";
$brand_names[]="Pharetra Quisque Corp.";
$brand_descriptions[]="Suspendisse congue purus vel diam bibendum, a volutpat purus gravida.";
$brand_phones[]="902364940";
$admin_fnames[]="Doria";
$admin_lnames[]="Brueggemann";
$admin_emails[]="doria@pharetraquisquecorp..com";


$brand_usernames[]="felispurus";
$brand_names[]="Felis Purus Incorporated";
$brand_descriptions[]="Vestibulum in nibh facilisis, consequat nisi vel, facilisis risus.";
$brand_phones[]="902963931";
$admin_fnames[]="Markus";
$admin_lnames[]="Brubaker";
$admin_emails[]="markus@felispurus.com";


$brand_usernames[]="leomorbinequepc";
$brand_names[]="Leo Morbi Neque PC";
$brand_descriptions[]="In tincidunt nisl ut urna tincidunt, vitae laoreet erat pulvinar.";
$brand_phones[]="902636339";
$admin_fnames[]="Martine";
$admin_lnames[]="Chretien";
$admin_emails[]="martine@leomorbinequepc.com";


$brand_usernames[]="necquamcurabiturcorp.";
$brand_names[]="Nec Quam Curabitur Corp.";
$brand_descriptions[]="Nunc fringilla sapien in diam imperdiet posuere.";
$brand_phones[]="902447984";
$admin_fnames[]="Beckie";
$admin_lnames[]="Hufford";
$admin_emails[]="beckie@necquamcurabiturcorp..com";


$brand_usernames[]="gravidamaurisutcorporation";
$brand_names[]="Gravida Mauris Ut Corporation";
$brand_descriptions[]="Mauris vehicula ligula vitae ex tempus imperdiet.";
$brand_phones[]="902167812";
$admin_fnames[]="Monnie";
$admin_lnames[]="Epley";
$admin_emails[]="monnie@gravidamaurisutcorporation.com";


$brand_usernames[]="egestaspc";
$brand_names[]="Egestas PC";
$brand_descriptions[]="Curabitur luctus nulla vitae augue maximus blandit.";
$brand_phones[]="902023219";
$admin_fnames[]="Rudy";
$admin_lnames[]="Fester";
$admin_emails[]="rudy@egestaspc.com";


$brand_usernames[]="indolor";
$brand_names[]="In Dolor Ltd";
$brand_descriptions[]="Maecenas ac dui eget lacus porta aliquam.";
$brand_phones[]="902384455";
$admin_fnames[]="Joetta";
$admin_lnames[]="Ricklefs";
$admin_emails[]="joetta@indolor.com";


$brand_usernames[]="velquamdignissimcorp.";
$brand_names[]="Vel Quam Dignissim Corp.";
$brand_descriptions[]="Etiam sit amet est vel urna finibus euismod in a sem.";
$brand_phones[]="902277100";
$admin_fnames[]="Roman";
$admin_lnames[]="Fallon";
$admin_emails[]="roman@velquamdignissimcorp..com";


$brand_usernames[]="sagittis";
$brand_names[]="Sagittis LLC";
$brand_descriptions[]="Nulla sollicitudin sapien nec pellentesque pulvinar.";
$brand_phones[]="902688361";
$admin_fnames[]="Brianna";
$admin_lnames[]="Drinnon";
$admin_emails[]="brianna@sagittis.com";


$brand_usernames[]="non";
$brand_names[]="Non Ltd";
$brand_descriptions[]="Curabitur convallis nisl volutpat odio convallis auctor.";
$brand_phones[]="902248603";
$admin_fnames[]="Elsie";
$admin_lnames[]="Davalos";
$admin_emails[]="elsie@non.com";


$brand_usernames[]="pretiumetrutrum";
$brand_names[]="Pretium Et Rutrum Incorporated";
$brand_descriptions[]="Nullam quis diam nec arcu accumsan malesuada.";
$brand_phones[]="902145496";
$admin_fnames[]="Tasha";
$admin_lnames[]="Bundrick";
$admin_emails[]="tasha@pretiumetrutrum.com";


$brand_usernames[]="cras";
$brand_names[]="Cras LLC";
$brand_descriptions[]="Nam vitae eros egestas, maximus lectus et, faucibus justo.";
$brand_phones[]="902611641";
$admin_fnames[]="Maragret";
$admin_lnames[]="Peveto";
$admin_emails[]="maragret@cras.com";


$brand_usernames[]="enimgravidasitfoundation";
$brand_names[]="Enim Gravida Sit Foundation";
$brand_descriptions[]="Nulla feugiat justo eu leo sodales, at gravida turpis tincidunt.";
$brand_phones[]="902253269";
$admin_fnames[]="Caridad";
$admin_lnames[]="Strait";
$admin_emails[]="caridad@enimgravidasitfoundation.com";


$brand_usernames[]="etmagnisdispc";
$brand_names[]="Et Magnis Dis PC";
$brand_descriptions[]="Morbi ultrices nunc ac massa laoreet, nec auctor diam finibus.";
$brand_phones[]="902538652";
$admin_fnames[]="Emanuel";
$admin_lnames[]="Lauer";
$admin_emails[]="emanuel@etmagnisdispc.com";


$brand_usernames[]="scelerisqueduifoundation";
$brand_names[]="Scelerisque Dui Foundation";
$brand_descriptions[]="Fusce at eros pharetra, eleifend odio id, condimentum lectus.";
$brand_phones[]="902585196";
$admin_fnames[]="Bennett";
$admin_lnames[]="Volkmann";
$admin_emails[]="bennett@scelerisqueduifoundation.com";


$brand_usernames[]="erateget";
$brand_names[]="Erat Eget Incorporated";
$brand_descriptions[]="Sed eu magna pretium, congue arcu id, ultricies velit.";
$brand_phones[]="902231198";
$admin_fnames[]="Ivory";
$admin_lnames[]="Bettcher";
$admin_emails[]="ivory@erateget.com";


$brand_usernames[]="congue";
$brand_names[]="Congue Ltd";
$brand_descriptions[]="Integer eleifend nibh non dictum tincidunt.";
$brand_phones[]="902111918";
$admin_fnames[]="Shannon";
$admin_lnames[]="Pinon";
$admin_emails[]="shannon@congue.com";


$brand_usernames[]="dolordonecllp";
$brand_names[]="Dolor Donec LLP";
$brand_descriptions[]="Pellentesque sodales justo sit amet lacus finibus, pharetra posuere orci tristique.";
$brand_phones[]="902627627";
$admin_fnames[]="Meta";
$admin_lnames[]="Rieger";
$admin_emails[]="meta@dolordonecllp.com";


$brand_usernames[]="fringillacorporation";
$brand_names[]="Fringilla Corporation";
$brand_descriptions[]="Aenean commodo metus in elementum facilisis.";
$brand_phones[]="902259349";
$admin_fnames[]="Rosina";
$admin_lnames[]="Christofferse";
$admin_emails[]="rosina@fringillacorporation.com";


$brand_usernames[]="orciinpc";
$brand_names[]="Orci In PC";
$brand_descriptions[]="Maecenas imperdiet turpis in magna porttitor lacinia.";
$brand_phones[]="902200171";
$admin_fnames[]="Dortha";
$admin_lnames[]="Andrus";
$admin_emails[]="dortha@orciinpc.com";


$brand_usernames[]="curae;phasellusornareconsulting";
$brand_names[]="Curae; Phasellus Ornare Consulting";
$brand_descriptions[]="In commodo dolor a odio porttitor consectetur.";
$brand_phones[]="902557926";
$admin_fnames[]="Breann";
$admin_lnames[]="Furlow";
$admin_emails[]="breann@curae;phasellusornareconsulting.com";


$brand_usernames[]="porttitorerosnecfoundation";
$brand_names[]="Porttitor Eros Nec Foundation";
$brand_descriptions[]="Duis bibendum ipsum varius facilisis ultricies.";
$brand_phones[]="902015830";
$admin_fnames[]="Lucas";
$admin_lnames[]="Wyckoff";
$admin_emails[]="lucas@porttitorerosnecfoundation.com";


$brand_usernames[]="aliquamassociates";
$brand_names[]="Aliquam Associates";
$brand_descriptions[]="Suspendisse non magna pharetra, dignissim orci et, mollis lacus.";
$brand_phones[]="902549091";
$admin_fnames[]="Mariko";
$admin_lnames[]="Guardado";
$admin_emails[]="mariko@aliquamassociates.com";

  $table="admins";
  deleteInBD($table);
  $table="brands";
  deleteInBD($table);

  for($i=1;$i<sizeof($brand_usernames);$i++){
    $table="admins";
    $data=array();
    $data["id_admin"]=$i;
    $data["id_brand"]=$i;
    $data["brand_admin"]=1;
    $data["email"]=$admin_emails[$i];
    $data["password"]=sha1("password");
    $data["fname"]=$admin_lnames[$i];
    $data["lname"]=$admin_lnames[$i];
    $data["active"]=1;
    $data["verification_code"]=sha1("verification_code".$i);
    $data["created"]=getTimestamp();
    $data["last_connection"]=getTimestamp();
    $data["lost_password_code"]=sha1("lost_password_code".$i);
    $data["session_key"]=sha1("session_key".$i);
    $data["deleted"]=0;
    addInBD($table,$data);
    $admin=$data;

    $table="brands";
    $data=array();
    $data["id_brand"]=$i;
    $data["username"]=$brand_usernames[$i];
    $data["name"]=$brand_names[$i];
    $data["description"]=$brand_descriptions[$i];
    $data["phone"]=$brand_phones[$i];
    $data["email"]="info@".$brand_usernames[$i].".com";
    $data["active"]=1;
    $data["bind_activation"]=0;
    $data["created"]=getTimestamp();
    $data["subscription_plan"]="solo";
    $data["expiration_date"]=getTimestamp();
    $data["payment_plan"]="mounthly";
    $data["payment_method"]="bank_transfer";
    $data["payment_data"]="ES00447700".$brand_phones[$i];
    $data["deleted"]=0;
    addInBD($table,$data);
    $brand=$data;

    unlink(PATH."resources/brand_avatars/".$brand["id_brand"].".png");

    $Width = 500;
    $Height = 500;
    $lines_count=50;

    $Image = imagecreatetruecolor($Width, $Height);
    for($Row = 1; $Row <= $Height; $Row++) {
        $lines_count++;
        if($lines_count>=50){
          $color=array();

          $color["red"]=array();
          $color["green"]=array();
          $color["blue"]=array();

          for($x=0;$x<=(($Height/50)+1);$x++){
            $color["red"][]=mt_rand(0,255);
            $color["green"][]=mt_rand(0,255);
            $color["blue"][]=mt_rand(0,255);
          }
          $lines_count=0;
        }
        $w=0;
        for($Column = 1; $Column < $Width; $Column++) {
            $w++;
            $Colour = imagecolorallocate ($Image, $color["red"][intval($w/50)] , $color["green"][intval($w/50)], $color["blue"][intval($w/50)]);
            imagesetpixel($Image,$Column - 1 , $Row - 1, $Colour);
        }
        $Colour = imagecolorallocate ($Image, $color["red"][intval($w/50)] , $color["green"][intval($w/50)], $color["blue"][intval($w/50)]);
        imagesetpixel($Image,$Column - 1 , $Row - 1, $Colour);

    }
    touch(PATH."resources/brand_avatars/".$brand["id_brand"].".png");
    imagepng($Image,PATH."resources/brand_avatars/".$brand["id_brand"].".png");


  }


  $user_fnames[]="Burt";
  $user_lnames[]="Fritch";
  $user_emails[]="burt@email.com";

  $user_fnames[]="Tara";
  $user_lnames[]="Chappel";
  $user_emails[]="tara@email.com";

  $user_fnames[]="Shalonda";
  $user_lnames[]="Proehl";
  $user_emails[]="shalonda@email.com";

  $user_fnames[]="Stefan";
  $user_lnames[]="Rickards";
  $user_emails[]="stefan@email.com";

  $user_fnames[]="Sena";
  $user_lnames[]="Euler";
  $user_emails[]="sena@email.com";

  $user_fnames[]="Genevie";
  $user_lnames[]="Schrock";
  $user_emails[]="genevie@email.com";

  $user_fnames[]="Mariah";
  $user_lnames[]="Fitzsimmons";
  $user_emails[]="mariah@email.com";

  $user_fnames[]="Hermine";
  $user_lnames[]="Lindenberg";
  $user_emails[]="hermine@email.com";

  $user_fnames[]="Juan";
  $user_lnames[]="Levan";
  $user_emails[]="juan@email.com";

  $user_fnames[]="Jacklyn";
  $user_lnames[]="Lareau";
  $user_emails[]="jacklyn@email.com";

  $user_fnames[]="Corine";
  $user_lnames[]="Stoughton";
  $user_emails[]="corine@email.com";

  $user_fnames[]="Mauro";
  $user_lnames[]="Charon";
  $user_emails[]="mauro@email.com";

  $user_fnames[]="Kathryne";
  $user_lnames[]="Michalec";
  $user_emails[]="kathryne@email.com";

  $user_fnames[]="Eve";
  $user_lnames[]="Carignan";
  $user_emails[]="eve@email.com";

  $user_fnames[]="Lanelle";
  $user_lnames[]="Kahler";
  $user_emails[]="lanelle@email.com";

  $user_fnames[]="Roseanne";
  $user_lnames[]="Markus";
  $user_emails[]="roseanne@email.com";

  $user_fnames[]="Leota";
  $user_lnames[]="Coons";
  $user_emails[]="leota@email.com";

  $user_fnames[]="Laurena";
  $user_lnames[]="Holzer";
  $user_emails[]="laurena@email.com";

  $user_fnames[]="Carrol";
  $user_lnames[]="Urquhart";
  $user_emails[]="carrol@email.com";

  $user_fnames[]="Rowena";
  $user_lnames[]="Carroll";
  $user_emails[]="rowena@email.com";

  $user_fnames[]="Greta";
  $user_lnames[]="Hillin";
  $user_emails[]="greta@email.com";

  $user_fnames[]="Natosha";
  $user_lnames[]="Mcauliffe";
  $user_emails[]="natosha@email.com";

  $user_fnames[]="Jamee";
  $user_lnames[]="Mcjunkin";
  $user_emails[]="jamee@email.com";

  $user_fnames[]="Minta";
  $user_lnames[]="Lal";
  $user_emails[]="minta@email.com";

  $user_fnames[]="Raisa";
  $user_lnames[]="Ruley";
  $user_emails[]="raisa@email.com";

  $user_fnames[]="Alberta";
  $user_lnames[]="Rozell";
  $user_emails[]="alberta@email.com";

  $user_fnames[]="Julietta";
  $user_lnames[]="Habib";
  $user_emails[]="julietta@email.com";

  $user_fnames[]="Gerda";
  $user_lnames[]="Kelleher";
  $user_emails[]="gerda@email.com";

  $user_fnames[]="Angela";
  $user_lnames[]="Valles";
  $user_emails[]="angela@email.com";

  $user_fnames[]="Lyle";
  $user_lnames[]="Lapointe";
  $user_emails[]="lyle@email.com";

  $user_fnames[]="Sergio";
  $user_lnames[]="Yokum";
  $user_emails[]="sergio@email.com";

  $user_fnames[]="Tyesha";
  $user_lnames[]="Ayres";
  $user_emails[]="tyesha@email.com";

  $user_fnames[]="Kylie";
  $user_lnames[]="Leonardo";
  $user_emails[]="kylie@email.com";

  $user_fnames[]="Abraham";
  $user_lnames[]="Buckley";
  $user_emails[]="abraham@email.com";

  $user_fnames[]="Pamala";
  $user_lnames[]="Mariscal";
  $user_emails[]="pamala@email.com";

  $user_fnames[]="Modesto";
  $user_lnames[]="Hoisington";
  $user_emails[]="modesto@email.com";

  $user_fnames[]="Breanna";
  $user_lnames[]="Swallow";
  $user_emails[]="breanna@email.com";

  $user_fnames[]="Lavona";
  $user_lnames[]="Alcocer";
  $user_emails[]="lavona@email.com";

  $user_fnames[]="Kristofer";
  $user_lnames[]="Holm";
  $user_emails[]="kristofer@email.com";

  $user_fnames[]="Isis";
  $user_lnames[]="Reina";
  $user_emails[]="isis@email.com";

  $user_fnames[]="Robby";
  $user_lnames[]="Milliner";
  $user_emails[]="robby@email.com";

  $user_fnames[]="Marilu";
  $user_lnames[]="Rizzuto";
  $user_emails[]="marilu@email.com";

  $user_fnames[]="Dotty";
  $user_lnames[]="Fouche";
  $user_emails[]="dotty@email.com";

  $user_fnames[]="Naomi";
  $user_lnames[]="Mcmasters";
  $user_emails[]="naomi@email.com";

  $user_fnames[]="Peggie";
  $user_lnames[]="Hepworth";
  $user_emails[]="peggie@email.com";

  $user_fnames[]="Catherine";
  $user_lnames[]="Gajewski";
  $user_emails[]="catherine@email.com";

  $user_fnames[]="Rita";
  $user_lnames[]="Trantham";
  $user_emails[]="rita@email.com";

  $user_fnames[]="Bernita";
  $user_lnames[]="Lex";
  $user_emails[]="bernita@email.com";

  $user_fnames[]="Ciera";
  $user_lnames[]="Fiqueroa";
  $user_emails[]="ciera@email.com";

  $user_fnames[]="Hattie";
  $user_lnames[]="Rega";
  $user_emails[]="hattie@email.com";

  $user_fnames[]="Zaida";
  $user_lnames[]="Perrin";
  $user_emails[]="zaida@email.com";

  $user_fnames[]="Paz";
  $user_lnames[]="Brenton";
  $user_emails[]="paz@email.com";

  $user_fnames[]="Ella";
  $user_lnames[]="Hinkel";
  $user_emails[]="ella@email.com";

  $user_fnames[]="Josh";
  $user_lnames[]="Haan";
  $user_emails[]="josh@email.com";

  $user_fnames[]="Joye";
  $user_lnames[]="Gramling";
  $user_emails[]="joye@email.com";

  $user_fnames[]="Maryetta";
  $user_lnames[]="Mcdougal";
  $user_emails[]="maryetta@email.com";

  $user_fnames[]="Josef";
  $user_lnames[]="Griswold";
  $user_emails[]="josef@email.com";

  $user_fnames[]="Twanna";
  $user_lnames[]="Sumler";
  $user_emails[]="twanna@email.com";

  $user_fnames[]="Rolanda";
  $user_lnames[]="Grabill";
  $user_emails[]="rolanda@email.com";

  $user_fnames[]="Stefani";
  $user_lnames[]="Anzaldua";
  $user_emails[]="stefani@email.com";

  $user_fnames[]="Letitia";
  $user_lnames[]="Arata";
  $user_emails[]="letitia@email.com";

  $user_fnames[]="Eduardo";
  $user_lnames[]="Rickett";
  $user_emails[]="eduardo@email.com";

  $user_fnames[]="Cherise";
  $user_lnames[]="Folkerts";
  $user_emails[]="cherise@email.com";

  $user_fnames[]="Mickey";
  $user_lnames[]="Poynor";
  $user_emails[]="mickey@email.com";

  $user_fnames[]="Althea";
  $user_lnames[]="Crespo";
  $user_emails[]="althea@email.com";

  $user_fnames[]="Merrie";
  $user_lnames[]="Bushee";
  $user_emails[]="merrie@email.com";

  $user_fnames[]="Bobby";
  $user_lnames[]="Mounts";
  $user_emails[]="bobby@email.com";

  $user_fnames[]="Liz";
  $user_lnames[]="Kelley";
  $user_emails[]="liz@email.com";

  $user_fnames[]="Normand";
  $user_lnames[]="Woodruff";
  $user_emails[]="normand@email.com";

  $user_fnames[]="Marcie";
  $user_lnames[]="Bobo";
  $user_emails[]="marcie@email.com";

  $user_fnames[]="Zachariah";
  $user_lnames[]="Carlon";
  $user_emails[]="zachariah@email.com";

  $user_fnames[]="Les";
  $user_lnames[]="Morelock";
  $user_emails[]="les@email.com";

  $user_fnames[]="Gilberto";
  $user_lnames[]="Marotta";
  $user_emails[]="gilberto@email.com";

  $user_fnames[]="Verline";
  $user_lnames[]="Teal";
  $user_emails[]="verline@email.com";

  $user_fnames[]="Fred";
  $user_lnames[]="Dziedzic";
  $user_emails[]="fred@email.com";

  $user_fnames[]="Anjanette";
  $user_lnames[]="Ireland";
  $user_emails[]="anjanette@email.com";

  $user_fnames[]="Stefanie";
  $user_lnames[]="Nemeth";
  $user_emails[]="stefanie@email.com";

  $user_fnames[]="Carolyn";
  $user_lnames[]="Simmerman";
  $user_emails[]="carolyn@email.com";

  $user_fnames[]="Arianne";
  $user_lnames[]="Troung";
  $user_emails[]="arianne@email.com";

  $user_fnames[]="Tamar";
  $user_lnames[]="Greig";
  $user_emails[]="tamar@email.com";

  $user_fnames[]="Caitlyn";
  $user_lnames[]="Eklund";
  $user_emails[]="caitlyn@email.com";

  $user_fnames[]="Euna";
  $user_lnames[]="Shipp";
  $user_emails[]="euna@email.com";

  $user_fnames[]="Jeannie";
  $user_lnames[]="Braswell";
  $user_emails[]="jeannie@email.com";

  $user_fnames[]="Fern";
  $user_lnames[]="Mcguffey";
  $user_emails[]="fern@email.com";

  $user_fnames[]="Donn";
  $user_lnames[]="Sorrentino";
  $user_emails[]="donn@email.com";

  $user_fnames[]="Crystal";
  $user_lnames[]="Coots";
  $user_emails[]="crystal@email.com";

  $user_fnames[]="Dora";
  $user_lnames[]="Luongo";
  $user_emails[]="dora@email.com";

  $user_fnames[]="Teofila";
  $user_lnames[]="Paulsen";
  $user_emails[]="teofila@email.com";

  $user_fnames[]="Maud";
  $user_lnames[]="Seekins";
  $user_emails[]="maud@email.com";

  $user_fnames[]="Ilana";
  $user_lnames[]="Strausbaugh";
  $user_emails[]="ilana@email.com";

  $user_fnames[]="Princess";
  $user_lnames[]="Iskra";
  $user_emails[]="princess@email.com";

  $user_fnames[]="Erasmo";
  $user_lnames[]="Villanova";
  $user_emails[]="erasmo@email.com";

  $user_fnames[]="Rima";
  $user_lnames[]="Ruffin";
  $user_emails[]="rima@email.com";

  $user_fnames[]="Carey";
  $user_lnames[]="Cauley";
  $user_emails[]="carey@email.com";

  $user_fnames[]="Evonne";
  $user_lnames[]="Barbeau";
  $user_emails[]="evonne@email.com";

  $user_fnames[]="Willow";
  $user_lnames[]="Mauriello";
  $user_emails[]="willow@email.com";

  $user_fnames[]="Tambra";
  $user_lnames[]="Fitting";
  $user_emails[]="tambra@email.com";

  $user_fnames[]="Rosalee";
  $user_lnames[]="Custard";
  $user_emails[]="rosalee@email.com";

  $user_fnames[]="Lida";
  $user_lnames[]="Ashalintubbi";
  $user_emails[]="lida@email.com";

  $user_fnames[]="Sharyn";
  $user_lnames[]="Moitoso";
  $user_emails[]="sharyn@email.com";

  $user_fnames[]="Aubrey";
  $user_lnames[]="Acre";
  $user_emails[]="aubrey@email.com";

  $user_fnames[]="Margarite";
  $user_lnames[]="Box";
  $user_emails[]="margarite@email.com";

  $user_fnames[]="Myung";
  $user_lnames[]="Mona";
  $user_emails[]="myung@email.com";

  $user_fnames[]="Annetta";
  $user_lnames[]="Guinan";
  $user_emails[]="annetta@email.com";

  $user_fnames[]="Madonna";
  $user_lnames[]="Brookes";
  $user_emails[]="madonna@email.com";

  $user_fnames[]="Lajuana";
  $user_lnames[]="Pinney";
  $user_emails[]="lajuana@email.com";

  $user_fnames[]="Avery";
  $user_lnames[]="Moen";
  $user_emails[]="avery@email.com";

  $user_fnames[]="Stevie";
  $user_lnames[]="Castiglione";
  $user_emails[]="stevie@email.com";

  $user_fnames[]="Lura";
  $user_lnames[]="Karner";
  $user_emails[]="lura@email.com";

  $user_fnames[]="Queen";
  $user_lnames[]="Burgos";
  $user_emails[]="queen@email.com";

  $user_fnames[]="Rossana";
  $user_lnames[]="Zoeller";
  $user_emails[]="rossana@email.com";

  $user_fnames[]="Jerrold";
  $user_lnames[]="Moll";
  $user_emails[]="jerrold@email.com";

  $user_fnames[]="Raina";
  $user_lnames[]="Kroger";
  $user_emails[]="raina@email.com";

  $user_fnames[]="Lettie";
  $user_lnames[]="Dansby";
  $user_emails[]="lettie@email.com";

  $user_fnames[]="Albertha";
  $user_lnames[]="Calabria";
  $user_emails[]="albertha@email.com";

  $user_fnames[]="Salena";
  $user_lnames[]="Finan";
  $user_emails[]="salena@email.com";

  $user_fnames[]="Michelina";
  $user_lnames[]="Lopiccolo";
  $user_emails[]="michelina@email.com";

  $user_fnames[]="Shona";
  $user_lnames[]="Mccurdy";
  $user_emails[]="shona@email.com";

  $user_fnames[]="Joella";
  $user_lnames[]="Bray";
  $user_emails[]="joella@email.com";

  $user_fnames[]="Nigel";
  $user_lnames[]="Christiano";
  $user_emails[]="nigel@email.com";

  $user_fnames[]="Hui";
  $user_lnames[]="Whitehorn";
  $user_emails[]="hui@email.com";

  $user_fnames[]="Yer";
  $user_lnames[]="Barra";
  $user_emails[]="yer@email.com";

  $user_fnames[]="Jeri";
  $user_lnames[]="Bergin";
  $user_emails[]="jeri@email.com";

  $user_fnames[]="Verlie";
  $user_lnames[]="Sergio";
  $user_emails[]="verlie@email.com";

  $user_fnames[]="Sheila";
  $user_lnames[]="Gauldin";
  $user_emails[]="sheila@email.com";

  $user_fnames[]="Deloris";
  $user_lnames[]="Orvis";
  $user_emails[]="deloris@email.com";

  $user_fnames[]="Ethel";
  $user_lnames[]="Sowders";
  $user_emails[]="ethel@email.com";

  $user_fnames[]="Dominick";
  $user_lnames[]="Ayer";
  $user_emails[]="dominick@email.com";

  $user_fnames[]="Beatris";
  $user_lnames[]="Mcelravy";
  $user_emails[]="beatris@email.com";

  $user_fnames[]="Anibal";
  $user_lnames[]="Shetler";
  $user_emails[]="anibal@email.com";

  $user_fnames[]="Melvin";
  $user_lnames[]="Buser";
  $user_emails[]="melvin@email.com";

  $user_fnames[]="Orville";
  $user_lnames[]="Steere";
  $user_emails[]="orville@email.com";

  $user_fnames[]="Leoma";
  $user_lnames[]="Rudolph";
  $user_emails[]="leoma@email.com";

  $user_fnames[]="Tawanda";
  $user_lnames[]="Elsen";
  $user_emails[]="tawanda@email.com";

  $user_fnames[]="Irvin";
  $user_lnames[]="Delreal";
  $user_emails[]="irvin@email.com";

  $user_fnames[]="Jay";
  $user_lnames[]="Lamey";
  $user_emails[]="jay@email.com";

  $user_fnames[]="Pete";
  $user_lnames[]="Amado";
  $user_emails[]="pete@email.com";

  $user_fnames[]="Marcie";
  $user_lnames[]="Sieg";
  $user_emails[]="marcie@email.com";

  $user_fnames[]="Bulah";
  $user_lnames[]="Nazario";
  $user_emails[]="bulah@email.com";

  $user_fnames[]="Lee";
  $user_lnames[]="Vannatter";
  $user_emails[]="lee@email.com";

  $user_fnames[]="Lorette";
  $user_lnames[]="Mondragon";
  $user_emails[]="lorette@email.com";

  $user_fnames[]="Rena";
  $user_lnames[]="Casaus";
  $user_emails[]="rena@email.com";

  $user_fnames[]="Ezekiel";
  $user_lnames[]="Matranga";
  $user_emails[]="ezekiel@email.com";

  $user_fnames[]="Ludie";
  $user_lnames[]="Dambrosia";
  $user_emails[]="ludie@email.com";

  $user_fnames[]="Loralee";
  $user_lnames[]="Garlington";
  $user_emails[]="loralee@email.com";

  $user_fnames[]="Lula";
  $user_lnames[]="Custer";
  $user_emails[]="lula@email.com";

  $user_fnames[]="Lilia";
  $user_lnames[]="Fewell";
  $user_emails[]="lilia@email.com";

  $user_fnames[]="Rodolfo";
  $user_lnames[]="Sanford";
  $user_emails[]="rodolfo@email.com";

  $user_fnames[]="Kristy";
  $user_lnames[]="Botsford";
  $user_emails[]="kristy@email.com";

  $user_fnames[]="Deadra";
  $user_lnames[]="Telfer";
  $user_emails[]="deadra@email.com";

  $user_fnames[]="Adela";
  $user_lnames[]="Nordin";
  $user_emails[]="adela@email.com";

  $user_fnames[]="Casimira";
  $user_lnames[]="Birchard";
  $user_emails[]="casimira@email.com";

  $user_fnames[]="Sharyl";
  $user_lnames[]="Bulter";
  $user_emails[]="sharyl@email.com";

  $user_fnames[]="Nell";
  $user_lnames[]="Engelmann";
  $user_emails[]="nell@email.com";

  $user_fnames[]="Loan";
  $user_lnames[]="Gilbert";
  $user_emails[]="loan@email.com";

  $user_fnames[]="Retta";
  $user_lnames[]="Schwarz";
  $user_emails[]="retta@email.com";

  $user_fnames[]="Brittney";
  $user_lnames[]="Bergey";
  $user_emails[]="brittney@email.com";

  $user_fnames[]="Makeda";
  $user_lnames[]="Russ";
  $user_emails[]="makeda@email.com";

  $user_fnames[]="Mac";
  $user_lnames[]="Inskeep";
  $user_emails[]="mac@email.com";

  $user_fnames[]="Daren";
  $user_lnames[]="Bensen";
  $user_emails[]="daren@email.com";

  $user_fnames[]="Bret";
  $user_lnames[]="Tetrault";
  $user_emails[]="bret@email.com";

  $user_fnames[]="Annalee";
  $user_lnames[]="Parvin";
  $user_emails[]="annalee@email.com";

  $user_fnames[]="Ismael";
  $user_lnames[]="Bachelor";
  $user_emails[]="ismael@email.com";

  $user_fnames[]="Lynetta";
  $user_lnames[]="Barbour";
  $user_emails[]="lynetta@email.com";

  $user_fnames[]="Grisel";
  $user_lnames[]="Noll";
  $user_emails[]="grisel@email.com";

  $user_fnames[]="Chiquita";
  $user_lnames[]="Spray";
  $user_emails[]="chiquita@email.com";

  $user_fnames[]="Senaida";
  $user_lnames[]="Romines";
  $user_emails[]="senaida@email.com";

  $user_fnames[]="Kali";
  $user_lnames[]="Tabler";
  $user_emails[]="kali@email.com";

  $user_fnames[]="Kazuko";
  $user_lnames[]="Wood";
  $user_emails[]="kazuko@email.com";

  $user_fnames[]="Christiane";
  $user_lnames[]="Hazeltine";
  $user_emails[]="christiane@email.com";

  $user_fnames[]="Yuri";
  $user_lnames[]="Coppock";
  $user_emails[]="yuri@email.com";

  $user_fnames[]="Setsuko";
  $user_lnames[]="Rasberry";
  $user_emails[]="setsuko@email.com";

  $user_fnames[]="Raeann";
  $user_lnames[]="Piro";
  $user_emails[]="raeann@email.com";

  $user_fnames[]="Rafael";
  $user_lnames[]="Blackburn";
  $user_emails[]="rafael@email.com";

  $user_fnames[]="Lanette";
  $user_lnames[]="Filice";
  $user_emails[]="lanette@email.com";

  $user_fnames[]="Keisha";
  $user_lnames[]="Stgelais";
  $user_emails[]="keisha@email.com";

  $user_fnames[]="Patrica";
  $user_lnames[]="Cogdill";
  $user_emails[]="patrica@email.com";

  $user_fnames[]="Raylene";
  $user_lnames[]="Aquilar";
  $user_emails[]="raylene@email.com";

  $user_fnames[]="Keneth";
  $user_lnames[]="Mcmillion";
  $user_emails[]="keneth@email.com";

  $user_fnames[]="Annabelle";
  $user_lnames[]="Astin";
  $user_emails[]="annabelle@email.com";

  $user_fnames[]="Garnet";
  $user_lnames[]="Bellah";
  $user_emails[]="garnet@email.com";

  $user_fnames[]="Shayla";
  $user_lnames[]="Poppell";
  $user_emails[]="shayla@email.com";

  $user_fnames[]="Bok";
  $user_lnames[]="Ikard";
  $user_emails[]="bok@email.com";

  $user_fnames[]="Collin";
  $user_lnames[]="Arpin";
  $user_emails[]="collin@email.com";

  $user_fnames[]="Nakita";
  $user_lnames[]="Callanan";
  $user_emails[]="nakita@email.com";

  $user_fnames[]="Candis";
  $user_lnames[]="Tobias";
  $user_emails[]="candis@email.com";

  $user_fnames[]="Season";
  $user_lnames[]="Planas";
  $user_emails[]="season@email.com";

  $message_contents[]="Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
  $message_contents[]="Donec ornare sapien ac dictum tincidunt.";
  $message_contents[]="Maecenas eget massa fringilla, aliquet leo at, lacinia lacus.";
  $message_contents[]="Donec quis eros in magna egestas commodo.";
  $message_contents[]="Sed ultrices purus vel scelerisque bibendum.";
  $message_contents[]="Mauris eget eros non arcu hendrerit commodo.";
  $message_contents[]="Integer bibendum turpis nec erat molestie, at efficitur urna molestie.";
  $message_contents[]="Sed id nunc ac quam ultricies viverra eu in dolor.";
  $message_contents[]="Maecenas varius sem sed lacus bibendum laoreet.";
  $message_contents[]="In ullamcorper ipsum id suscipit tincidunt.";
  $message_contents[]="Morbi a urna tristique, auctor ligula at, rhoncus odio.";
  $message_contents[]="Nunc eleifend lacus a blandit ornare.";
  $message_contents[]="Integer mattis ligula sit amet placerat ornare.";
  $message_contents[]="Donec sit amet orci cursus dui dignissim hendrerit.";
  $message_contents[]="Phasellus ut leo efficitur, laoreet nunc nec, aliquam augue.";
  $message_contents[]="Nullam dictum nisi quis mi tempor tristique.";
  $message_contents[]="Praesent pulvinar sapien vel mi tempus, non aliquet felis tincidunt.";
  $message_contents[]="Vestibulum egestas tellus id cursus fringilla.";
  $message_contents[]="Duis facilisis elit ac porta mollis.";
  $message_contents[]="Cras ut arcu dignissim, finibus massa eu, tempus neque.";
  $message_contents[]="Nunc ut enim vel leo finibus euismod.";
  $message_contents[]="Donec semper massa non mattis efficitur.";
  $message_contents[]="Vivamus commodo nisl et volutpat varius.";
  $message_contents[]="Nunc a arcu vel urna sagittis sollicitudin id sit amet sapien.";
  $message_contents[]="Morbi blandit tortor ac molestie aliquet.";
  $message_contents[]="Duis sodales orci sed dui suscipit, a hendrerit tellus tempor.";
  $message_contents[]="Quisque dignissim ligula sit amet elit porta mattis.";
  $message_contents[]="Maecenas venenatis sapien sed nulla ornare volutpat.";
  $message_contents[]="Nam sed nibh eu lectus consequat varius.";
  $message_contents[]="Nulla hendrerit risus in tortor egestas interdum.";
  $message_contents[]="In auctor odio et tellus scelerisque consectetur.";
  $message_contents[]="In non est at risus egestas viverra.";
  $message_contents[]="Phasellus suscipit lacus nec magna posuere, ut hendrerit odio lacinia.";
  $message_contents[]="Cras rhoncus massa eu tortor sollicitudin rutrum.";
  $message_contents[]="Vivamus id leo placerat, posuere nibh a, tempor nulla.";
  $message_contents[]="Nulla pellentesque felis ac dui lobortis, nec blandit ante volutpat.";
  $message_contents[]="Cras mollis orci at quam laoreet, id vestibulum ex posuere.";
  $message_contents[]="Morbi mollis est at mollis accumsan.";
  $message_contents[]="Nunc tincidunt enim porta, sagittis nisi id, consectetur diam.";
  $message_contents[]="Phasellus pellentesque mauris non molestie sodales.";
  $message_contents[]="Integer blandit libero ac consequat cursus.";
  $message_contents[]="Integer et sem vitae quam lacinia semper at eu ligula.";
  $message_contents[]="Nullam ut elit sit amet urna sodales congue non at arcu.";
  $message_contents[]="Curabitur ultrices ante non leo placerat lacinia.";
  $message_contents[]="Curabitur vel dui vitae justo lacinia facilisis et tempus sem.";
  $message_contents[]="Nulla rutrum risus nec metus gravida dignissim.";
  $message_contents[]="Vivamus eu nisl ut sem tincidunt tempor vitae non metus.";
  $message_contents[]="Curabitur consequat diam nec velit elementum, et porta enim tristique.";
  $message_contents[]="Sed et turpis aliquet tellus viverra mattis eu ut nunc.";
  $message_contents[]="Phasellus ac magna hendrerit, ullamcorper erat in, fermentum est.";
  $message_contents[]="Mauris tincidunt arcu eget quam aliquet molestie.";
  $message_contents[]="Phasellus eget sapien vulputate nibh dignissim dignissim nec vel leo.";
  $message_contents[]="Vestibulum et mauris ultricies, rutrum sapien a, volutpat quam.";
  $message_contents[]="Maecenas sed nulla mollis, sollicitudin ipsum eget, mollis odio.";
  $message_contents[]="Integer venenatis nunc vel leo egestas, sed molestie eros pulvinar.";
  $message_contents[]="Sed id leo a enim egestas tempus vitae laoreet mi.";
  $message_contents[]="Etiam eget odio non tellus elementum mollis.";
  $message_contents[]="Praesent rhoncus tortor eu mauris pellentesque vestibulum.";
  $message_contents[]="Nam viverra velit et convallis ornare.";
  $message_contents[]="Ut id ligula at est molestie tempus in quis metus.";
  $message_contents[]="Mauris dignissim sem a cursus sollicitudin.";
  $message_contents[]="Ut sit amet neque in diam sollicitudin tempor.";
  $message_contents[]="Nulla egestas magna quis blandit faucibus.";
  $message_contents[]="Etiam at ex et erat pulvinar ullamcorper eget facilisis libero.";
  $message_contents[]="Aliquam et libero posuere, lacinia sem vel, elementum odio.";
  $message_contents[]="Suspendisse at urna quis neque fermentum aliquet.";
  $message_contents[]="Fusce eget est feugiat, tincidunt augue sit amet, ultrices massa.";
  $message_contents[]="Mauris dictum eros non euismod ultrices.";
  $message_contents[]="Donec pharetra diam a elementum ultricies.";
  $message_contents[]="Nunc maximus quam eu erat cursus suscipit.";
  $message_contents[]="Nulla interdum metus id arcu consectetur imperdiet.";
  $message_contents[]="Sed laoreet libero eget neque auctor, quis blandit nunc convallis.";
  $message_contents[]="Ut sed erat hendrerit, pellentesque erat vel, tempor leo.";
  $message_contents[]="Etiam id velit congue, dapibus risus at, maximus leo.";
  $message_contents[]="Pellentesque id quam in nulla pellentesque aliquam.";
  $message_contents[]="Suspendisse vitae purus sed augue semper condimentum.";
  $message_contents[]="Pellentesque ut nunc vehicula, condimentum velit eu, tempus elit.";
  $message_contents[]="Quisque ultrices urna sit amet ex interdum luctus.";
  $message_contents[]="Proin vel neque pellentesque, egestas purus eget, convallis odio.";
  $message_contents[]="Nulla facilisis leo quis mi vestibulum dignissim.";
  $message_contents[]="Quisque fermentum mauris sit amet nisl pretium, id tincidunt neque venenatis.";
  $message_contents[]="In vulputate leo a odio imperdiet dignissim eu in ipsum.";
  $message_contents[]="Nullam nec enim in purus volutpat ornare fringilla quis neque.";
  $message_contents[]="Ut et dui aliquet, bibendum nulla sed, ultrices sapien.";
  $message_contents[]="Sed semper ipsum vel arcu tincidunt maximus.";
  $message_contents[]="Pellentesque non libero ut erat condimentum tempus.";
  $message_contents[]="In hendrerit eros eget elementum blandit.";
  $message_contents[]="Nulla vel arcu congue, sodales enim quis, blandit est.";
  $message_contents[]="Phasellus eu massa semper, ultrices felis ut, vestibulum lacus.";
  $message_contents[]="Pellentesque ut odio lobortis, suscipit ipsum a, consectetur enim.";
  $message_contents[]="Fusce mattis ligula a commodo lacinia.";
  $message_contents[]="Nunc ac neque a nibh consectetur luctus.";
  $message_contents[]="In ut lectus venenatis, ultrices enim quis, blandit mi.";
  $message_contents[]="Praesent in augue commodo, convallis neque at, venenatis ante.";
  $message_contents[]="Proin ac justo convallis, finibus purus sed, ultrices odio.";
  $message_contents[]="Integer a nibh quis augue egestas consectetur sit amet egestas lectus.";
  $message_contents[]="Donec sed nisl aliquet, ornare nunc ut, tincidunt mi.";
  $message_contents[]="In vel sapien a mauris vestibulum sagittis mollis vitae eros.";
  $message_contents[]="Nullam vehicula urna aliquam neque finibus finibus.";
  $message_contents[]="Curabitur in risus volutpat, venenatis tellus sit amet, vestibulum tortor.";
  $message_contents[]="Vivamus ornare libero sed elementum venenatis.";
  $message_contents[]="Cras ut ipsum id nisl viverra pretium vitae at quam.";
  $message_contents[]="Fusce sit amet nisl auctor, molestie tellus tincidunt, tincidunt nisi.";
  $message_contents[]="Duis tempus augue non ante pulvinar, non convallis nisi accumsan.";
  $message_contents[]="Cras congue mi vel felis rutrum, quis vestibulum dolor mollis.";
  $message_contents[]="In condimentum neque vitae sagittis vestibulum.";
  $message_contents[]="Suspendisse in purus in leo luctus placerat lobortis quis mauris.";
  $message_contents[]="Praesent vitae tortor consectetur sapien euismod tincidunt.";
  $message_contents[]="Donec sed turpis dapibus dui faucibus convallis et ut lacus.";
  $message_contents[]="Cras eget magna ac mauris cursus tristique at in mauris.";
  $message_contents[]="Etiam quis dolor sed ante rutrum tempus sed sed est.";
  $message_contents[]="Fusce ac lorem sagittis, fringilla felis in, lobortis urna.";
  $message_contents[]="Praesent tempor elit id nisl consectetur, ut consequat erat placerat.";
  $message_contents[]="Curabitur quis dolor consequat, maximus massa eu, lacinia tortor.";
  $message_contents[]="Suspendisse non eros vitae magna sagittis egestas.";
  $message_contents[]="Proin sagittis nulla a euismod aliquet.";
  $message_contents[]="Proin et mauris at urna sodales scelerisque.";
  $message_contents[]="Pellentesque elementum enim in magna consectetur luctus.";
  $message_contents[]="Donec vitae arcu sit amet mauris convallis dictum.";
  $message_contents[]="Cras a ex consectetur, convallis metus non, porttitor metus.";
  $message_contents[]="Duis et sapien ac ipsum lacinia accumsan.";
  $message_contents[]="Nam tristique enim sollicitudin laoreet congue.";
  $message_contents[]="Nullam id urna vel massa pellentesque elementum in sed ligula.";
  $message_contents[]="In tristique urna quis sapien fermentum sodales.";
  $message_contents[]="Sed a risus fringilla, aliquet augue vel, accumsan eros.";
  $message_contents[]="Nulla ultricies turpis vitae vestibulum pharetra.";
  $message_contents[]="Ut sed purus facilisis magna commodo pretium et nec enim.";
  $message_contents[]="Praesent eget massa a nunc scelerisque venenatis.";
  $message_contents[]="Nullam ultricies tellus sit amet eros pharetra, vitae fermentum purus sagittis.";
  $message_contents[]="Integer molestie sem at auctor interdum.";
  $message_contents[]="Donec porta elit eu mattis suscipit.";
  $message_contents[]="Mauris a nulla placerat, varius odio ut, commodo orci.";
  $message_contents[]="Cras sagittis libero vitae leo varius pharetra.";
  $message_contents[]="Mauris aliquet arcu eu volutpat efficitur.";
  $message_contents[]="Vestibulum viverra turpis in dolor suscipit aliquet.";
  $message_contents[]="Phasellus a augue vitae nibh eleifend euismod vel quis ligula.";
  $message_contents[]="Sed ac risus lacinia, aliquam nulla vitae, commodo dolor.";
  $message_contents[]="Nullam sit amet tellus rhoncus, scelerisque urna a, consequat justo.";
  $message_contents[]="Aliquam vulputate orci non mauris porttitor, nec pulvinar metus fringilla.";
  $message_contents[]="Morbi eu diam dictum, blandit lorem non, pellentesque tortor.";
  $message_contents[]="Aliquam finibus justo a velit accumsan, at mollis enim egestas.";
  $message_contents[]="Donec ornare mi nec congue cursus.";
  $message_contents[]="Donec pellentesque quam et molestie vehicula.";
  $message_contents[]="Aliquam in neque sed ante efficitur dignissim.";
  $message_contents[]="Cras non velit porttitor, molestie sem ultrices, egestas diam.";
  $message_contents[]="Vivamus volutpat erat non volutpat molestie.";
  $message_contents[]="Nullam mollis urna aliquam, bibendum dui et, vestibulum nulla.";
  $message_contents[]="Fusce nec mauris mollis, varius nisi eu, consectetur tellus.";
  $message_contents[]="Nulla id sem quis arcu aliquam euismod.";
  $message_contents[]="Nam pulvinar massa quis augue euismod viverra.";
  $message_contents[]="Etiam sed ipsum tincidunt, dapibus nulla ultrices, sagittis dui.";
  $message_contents[]="Etiam vel purus vel arcu placerat sagittis sed non nisi.";
  $message_contents[]="Nam ac quam maximus, mattis enim eget, cursus ante.";
  $message_contents[]="Donec ornare est scelerisque massa feugiat interdum.";
  $message_contents[]="Proin dapibus est vulputate, dignissim tellus et, imperdiet enim.";
  $message_contents[]="Proin ornare augue ac eros dictum, id porttitor neque venenatis.";
  $message_contents[]="In vitae urna at massa tristique tempus vitae in libero.";
  $message_contents[]="Aenean semper enim ac felis blandit hendrerit.";
  $message_contents[]="Mauris fermentum massa vel purus iaculis, ut dapibus tellus venenatis.";
  $message_contents[]="Vestibulum ac lacus in nibh facilisis egestas.";
  $message_contents[]="Vivamus suscipit nisi quis tellus porta, eu maximus quam mollis.";
  $message_contents[]="Quisque eu libero eu nulla aliquam volutpat.";
  $message_contents[]="Donec hendrerit neque pretium ligula porttitor tristique.";
  $message_contents[]="Cras sit amet lacus ac nibh dignissim mattis a id metus.";
  $message_contents[]="Etiam at nisl maximus, consectetur libero in, placerat dui.";
  $message_contents[]="Fusce blandit lacus sit amet tortor commodo, in semper est hendrerit.";
  $message_contents[]="Nam vel sem dignissim, suscipit tortor eget, euismod est.";
  $message_contents[]="Nulla vehicula ante ut ultrices interdum.";
  $message_contents[]="Phasellus feugiat erat a felis sollicitudin, ut fringilla mi varius.";
  $message_contents[]="Etiam luctus risus et tempor dapibus.";
  $message_contents[]="Fusce eget mi in augue maximus tempus.";
  $message_contents[]="Nulla eget massa ac sem lobortis vulputate ac ut nulla.";
  $message_contents[]="Nunc sed lorem et ex molestie dapibus vel ut metus.";
  $message_contents[]="Nulla gravida libero vel aliquet fringilla.";
  $message_contents[]="Integer non mi sed elit iaculis commodo mollis sit amet felis.";
  $message_contents[]="Etiam dapibus enim ut arcu tempor, eu vehicula felis egestas.";
  $message_contents[]="Vestibulum eget dolor vitae enim pellentesque fermentum nec eu turpis.";
  $message_contents[]="Mauris ut elit accumsan, consectetur eros et, lacinia lorem.";
  $message_contents[]="Curabitur dictum turpis vitae est mollis tempus.";
  $message_contents[]="Nunc consequat ipsum eu orci bibendum sollicitudin.";
  $message_contents[]="Quisque lobortis elit in arcu accumsan laoreet.";
  $message_contents[]="Morbi viverra purus ut purus ultricies pellentesque.";
  $message_contents[]="Donec non neque bibendum, ultricies dolor et, suscipit eros.";
  $message_contents[]="Aliquam dictum odio ac libero interdum, quis sodales diam efficitur.";
  $message_contents[]="Morbi a mi nec nisl blandit rutrum.";
  $message_contents[]="Maecenas sit amet elit ut libero aliquam vestibulum.";
  $message_contents[]="Donec feugiat sem quis sodales imperdiet.";
  $message_contents[]="Aliquam a nisi ultrices leo vestibulum lobortis.";
  $message_contents[]="Cras non dolor congue, maximus metus non, dictum elit.";
  $message_contents[]="Suspendisse vitae libero sit amet elit accumsan fermentum eu vel ligula.";
  $message_contents[]="Morbi sollicitudin mi tristique urna egestas ultrices.";
  $message_contents[]="Vivamus molestie urna et lectus pretium bibendum.";
  $message_contents[]="Nullam vitae leo ut sapien aliquet fermentum.";
  $message_contents[]="Proin ac risus non ex auctor hendrerit.";
  $message_contents[]="Aliquam vitae erat pellentesque risus imperdiet suscipit ut a est.";
  $message_contents[]="Praesent eget turpis iaculis, pharetra dui vel, imperdiet turpis.";
  $message_contents[]="Aliquam molestie purus nec erat condimentum venenatis.";
  $message_contents[]="Duis et ipsum a ante suscipit consectetur.";
  $message_contents[]="Ut non justo vitae purus pulvinar aliquet.";
  $message_contents[]="Suspendisse dignissim nisl congue maximus molestie.";
  $message_contents[]="In dapibus nunc sed cursus fermentum.";
  $message_contents[]="Nulla eget urna nec erat imperdiet egestas.";
  $message_contents[]="Pellentesque porttitor purus in purus varius, sit amet fringilla enim eleifend.";
  $message_contents[]="Duis id mi in libero facilisis maximus.";
  $message_contents[]="Fusce condimentum nunc vel dolor facilisis, feugiat suscipit arcu vehicula.";
  $message_contents[]="Aliquam iaculis elit sed mauris egestas maximus.";
  $message_contents[]="Nulla maximus velit sed felis egestas suscipit.";
  $message_contents[]="Sed fringilla arcu quis varius vulputate.";
  $message_contents[]="Proin a diam malesuada, vehicula diam et, pulvinar ligula.";
  $message_contents[]="Nulla consectetur augue vitae ultrices interdum.";
  $message_contents[]="Aenean non massa vehicula, efficitur justo eu, interdum odio.";
  $message_contents[]="Sed consectetur libero ut odio mollis maximus.";
  $message_contents[]="Maecenas commodo nulla eu ex feugiat auctor eu eget felis.";
  $message_contents[]="Integer rhoncus erat ornare risus pellentesque, sit amet efficitur nisl porta.";
  $message_contents[]="Phasellus tristique enim vitae ullamcorper facilisis.";
  $message_contents[]="Sed interdum velit sed auctor maximus.";
  $message_contents[]="Sed eget lorem porta, aliquet neque et, dictum nulla.";
  $message_contents[]="Suspendisse ac nulla sit amet diam fermentum ultricies faucibus et sem.";
  $message_contents[]="Nam maximus ligula id congue laoreet.";
  $message_contents[]="Sed quis nisi nec mi maximus mollis.";
  $message_contents[]="Nulla vitae lectus sed tortor consequat gravida.";
  $message_contents[]="Donec auctor tortor sit amet lectus porttitor, et fringilla dolor commodo.";
  $message_contents[]="Quisque porta elit id tortor molestie, consequat ultricies quam eleifend.";
  $message_contents[]="Ut in nibh sed dui lacinia cursus.";
  $message_contents[]="Proin vel ligula consequat, hendrerit mi vel, vehicula enim.";
  $message_contents[]="Sed tempor sapien porta magna pharetra efficitur.";
  $message_contents[]="In faucibus purus eu arcu ornare, interdum euismod ipsum fermentum.";
  $message_contents[]="Nulla quis urna ac ligula sollicitudin rutrum.";
  $message_contents[]="Morbi nec ligula lacinia, condimentum risus in, congue purus.";
  $message_contents[]="Nulla eleifend velit eget mi tempus vestibulum.";
  $message_contents[]="Fusce at justo nec orci tempor dignissim in sed neque.";
  $message_contents[]="Nulla lobortis tortor sodales, ultrices mi tempor, ornare nibh.";
  $message_contents[]="Aenean porttitor sapien ut turpis consectetur tempor.";
  $message_contents[]="Vivamus tempus est quis placerat eleifend.";
  $message_contents[]="Donec vel nisl laoreet, accumsan magna id, eleifend turpis.";
  $message_contents[]="Suspendisse id metus vitae mauris sollicitudin cursus vel non orci.";
  $message_contents[]="Nulla euismod neque non erat euismod fringilla.";
  $message_contents[]="Aliquam rutrum purus vitae tortor vehicula condimentum.";
  $message_contents[]="Ut in velit ac arcu molestie bibendum vel ut tellus.";
  $message_contents[]="Ut laoreet dolor vitae diam congue, vel euismod felis dapibus.";
  $message_contents[]="Phasellus cursus metus venenatis tortor sollicitudin, sit amet fermentum tellus scelerisque.";
  $message_contents[]="Vestibulum quis felis quis justo consequat tincidunt.";
  $message_contents[]="In sodales ligula a erat semper euismod.";
  $message_contents[]="Aenean et augue et diam tempus ultrices.";
  $message_contents[]="Curabitur rutrum ipsum a massa volutpat lobortis.";
  $message_contents[]="Donec consequat mi sed libero malesuada tempor.";
  $message_contents[]="Cras mattis metus a dui auctor sollicitudin.";
  $message_contents[]="Morbi a nisi vulputate, placerat quam quis, euismod sapien.";
  $message_contents[]="Aenean efficitur diam at turpis tempor pharetra.";
  $message_contents[]="Donec in nunc sed justo ultricies interdum nec et diam.";
  $message_contents[]="Aenean sit amet tortor a elit eleifend maximus.";
  $message_contents[]="Proin mattis eros ac magna tincidunt, sed faucibus nulla pulvinar.";
  $message_contents[]="Aliquam eget ligula eu erat pellentesque vehicula.";
  $message_contents[]="Donec nec mi nec felis molestie varius a ut lectus.";
  $message_contents[]="Nunc at velit quis justo viverra finibus et ac sem.";
  $message_contents[]="Suspendisse id libero eu orci aliquam sagittis.";
  $message_contents[]="Donec viverra quam eu nisl varius, ac hendrerit elit dignissim.";
  $message_contents[]="Phasellus blandit turpis a enim condimentum, ut porta urna pellentesque.";
  $message_contents[]="Cras at mi non mi ultricies efficitur.";
  $message_contents[]="Sed eu velit gravida erat lobortis aliquet.";
  $message_contents[]="Integer tristique enim semper lacus dictum tempus.";
  $message_contents[]="Sed at ante fermentum, ornare est a, pulvinar lacus.";
  $message_contents[]="Vivamus in nisl at eros vehicula tempus vel nec dolor.";
  $message_contents[]="Suspendisse sollicitudin turpis quis enim eleifend pretium.";
  $message_contents[]="Aliquam placerat risus in placerat consequat.";
  $message_contents[]="Sed id nulla eget risus hendrerit tincidunt non vel mi.";
  $message_contents[]="Mauris ut est eget lectus volutpat commodo dignissim sed ligula.";
  $message_contents[]="Vivamus varius felis nec nulla luctus imperdiet.";
  $message_contents[]="Cras ac risus placerat, sagittis diam in, molestie nisi.";
  $message_contents[]="Nunc sed nulla vestibulum, ullamcorper massa nec, condimentum sem.";
  $message_contents[]="Pellentesque consectetur nulla hendrerit facilisis pretium.";
  $message_contents[]="Ut nec urna pretium, bibendum dui vitae, sollicitudin magna.";
  $message_contents[]="Cras quis erat nec nibh maximus dictum vel dignissim ex.";
  $message_contents[]="Ut ac nibh sed dolor suscipit tincidunt et in massa.";
  $message_contents[]="Vivamus finibus dolor vel pharetra vehicula.";
  $message_contents[]="Praesent sollicitudin mi ac iaculis ultrices.";
  $message_contents[]="Nulla rutrum eros ac tortor blandit, sed ullamcorper purus lacinia.";
  $message_contents[]="Proin pharetra eros eget eros gravida aliquam.";
  $message_contents[]="Vestibulum eget sapien varius nibh pellentesque aliquam quis nec eros.";
  $message_contents[]="Praesent interdum neque quis varius fringilla.";
  $message_contents[]="Sed ut est vitae justo consequat euismod ac sit amet ante.";
  $message_contents[]="Aliquam pulvinar urna in nisi tempus, porttitor laoreet risus elementum.";
  $message_contents[]="Vivamus pellentesque libero ac urna aliquet scelerisque.";
  $message_contents[]="Pellentesque sit amet mauris consequat, porttitor magna et, porta enim.";
  $message_contents[]="Ut scelerisque erat a neque feugiat eleifend.";
  $message_contents[]="Quisque tempor turpis ut risus convallis faucibus vitae id eros.";
  $message_contents[]="Vivamus sagittis massa a tortor congue vulputate.";
  $message_contents[]="Ut ultrices neque ac velit pulvinar, at feugiat neque venenatis.";
  $message_contents[]="Maecenas scelerisque mauris sit amet varius pellentesque.";
  $message_contents[]="Aliquam scelerisque dolor id justo pretium aliquam sed non ex.";
  $message_contents[]="Suspendisse varius risus id lacus elementum congue.";
  $message_contents[]="Morbi luctus lorem vel imperdiet iaculis.";
  $message_contents[]="Aliquam vel mauris non neque dignissim interdum at vel nulla.";
  $message_contents[]="Curabitur vitae tellus vehicula, rhoncus nibh eu, mattis sapien.";
  $message_contents[]="Pellentesque rhoncus sem lobortis congue tempus.";
  $message_contents[]="Integer sed erat tempor orci laoreet fermentum.";
  $message_contents[]="Morbi at nunc volutpat, volutpat odio in, semper magna.";
  $message_contents[]="Aliquam hendrerit sem ut neque lacinia aliquam.";
  $message_contents[]="Aliquam eget velit nec erat feugiat venenatis in id ante.";
  $message_contents[]="Nam id nulla feugiat, rutrum tellus quis, fermentum magna.";
  $message_contents[]="Maecenas a justo et augue dapibus ultricies.";
  $message_contents[]="Praesent maximus dolor non libero bibendum, vitae ultricies magna dapibus.";
  $message_contents[]="Nulla vel velit rutrum, euismod purus nec, molestie mi.";
  $message_contents[]="Nam elementum dui id felis interdum, ac auctor neque cursus.";
  $message_contents[]="Aenean nec dolor eget massa congue tristique eget in ex.";
  $message_contents[]="Duis bibendum mi at mi venenatis gravida.";
  $message_contents[]="Suspendisse ut mauris vel est accumsan rutrum et a ex.";
  $message_contents[]="Donec at orci eget nibh rhoncus lobortis at sed sapien.";
  $message_contents[]="Nam congue turpis nec libero ultricies tristique.";
  $message_contents[]="Aenean a ligula eget odio eleifend porta.";
  $message_contents[]="Curabitur suscipit purus ut magna interdum viverra.";
  $message_contents[]="Sed lobortis urna sed ante accumsan porttitor.";
  $message_contents[]="Mauris iaculis lorem ac mi posuere egestas congue sed purus.";
  $message_contents[]="Aliquam porttitor tellus id velit sodales mattis.";
  $message_contents[]="Etiam suscipit sem nec dolor laoreet tristique.";
  $message_contents[]="Sed vel purus eu nisl pretium porttitor.";
  $message_contents[]="Fusce elementum leo nec tincidunt efficitur.";
  $message_contents[]="Nunc gravida libero blandit velit porta, hendrerit hendrerit tortor venenatis.";
  $message_contents[]="Mauris nec risus maximus, interdum elit sit amet, fringilla orci.";
  $message_contents[]="Nulla lacinia lectus quis lacinia porttitor.";
  $message_contents[]="Mauris interdum eros quis condimentum dictum.";
  $message_contents[]="Nunc et magna eu ex fermentum fermentum at ac lorem.";
  $message_contents[]="Nunc cursus ligula et lectus commodo commodo a vitae massa.";
  $message_contents[]="Fusce vitae urna sollicitudin, pellentesque velit eget, molestie justo.";
  $message_contents[]="Suspendisse sed diam nec sem maximus dignissim quis nec turpis.";
  $message_contents[]="Ut rutrum risus in nibh fringilla sodales.";
  $message_contents[]="Nunc sed magna vel erat tempus pulvinar.";
  $message_contents[]="Nullam condimentum lorem et diam placerat condimentum.";
  $message_contents[]="Nulla tristique velit eu ante dapibus, ac sollicitudin dolor congue.";
  $message_contents[]="In ac velit condimentum, tincidunt urna sed, accumsan elit.";
  $message_contents[]="Nunc non purus quis neque sodales tempus.";
  $message_contents[]="Nulla eget libero in diam laoreet pellentesque efficitur quis orci.";
  $message_contents[]="Phasellus suscipit mi at tincidunt ultricies.";
  $message_contents[]="Ut facilisis nisi ac ligula consequat vulputate.";
  $message_contents[]="Vestibulum tristique sapien sagittis facilisis tincidunt.";
  $message_contents[]="Proin non dolor ullamcorper, facilisis diam a, vestibulum nulla.";
  $message_contents[]="Phasellus varius metus quis tortor interdum aliquam vel ut erat.";
  $message_contents[]="Sed vel nibh sit amet erat dapibus congue at viverra ex.";
  $message_contents[]="Fusce ut ligula vulputate libero placerat laoreet.";
  $message_contents[]="Sed non est porttitor, condimentum ante sollicitudin, venenatis ipsum.";
  $message_contents[]="Phasellus id purus eget tellus sodales mollis.";
  $message_contents[]="Phasellus ultrices lectus et aliquam vehicula.";
  $message_contents[]="Duis vitae erat tincidunt, eleifend arcu sit amet, feugiat justo.";
  $message_contents[]="Morbi vestibulum orci sit amet ultricies tempus.";
  $message_contents[]="Aenean a mi et mauris pretium tempus.";
  $message_contents[]="Morbi congue nulla euismod nibh feugiat egestas.";
  $message_contents[]="Aenean commodo massa in tortor pellentesque, eget pellentesque lectus ultricies.";
  $message_contents[]="Sed pretium nisl dignissim congue varius.";
  $message_contents[]="Integer placerat nisl ut est rhoncus, vel hendrerit dui lacinia.";
  $message_contents[]="Ut viverra tortor in tellus rhoncus, at fringilla leo consectetur.";
  $message_contents[]="Proin lobortis eros quis nisi venenatis placerat.";
  $message_contents[]="Fusce eu diam gravida purus faucibus elementum quis ac enim.";
  $message_contents[]="Ut ut diam et risus molestie faucibus.";
  $message_contents[]="Phasellus in orci sit amet enim laoreet sagittis.";
  $message_contents[]="Nullam et enim porttitor, ullamcorper orci ultrices, pellentesque odio.";
  $message_contents[]="Phasellus a quam auctor, ultrices ante luctus, vehicula quam.";
  $message_contents[]="In consequat enim at arcu interdum, nec facilisis orci pharetra.";
  $message_contents[]="Praesent sit amet mauris sagittis, varius ex non, aliquet orci.";
  $message_contents[]="Vivamus vel lacus dapibus, tempus libero vel, rhoncus eros.";
  $message_contents[]="Ut tincidunt ligula et purus mattis euismod.";
  $message_contents[]="Maecenas scelerisque dolor vel condimentum ultricies.";
  $message_contents[]="Nulla eu ipsum a eros elementum ultricies.";
  $message_contents[]="Suspendisse at tellus vitae sem eleifend lobortis.";
  $message_contents[]="Aliquam sollicitudin neque sed erat aliquam, at ultricies dolor fringilla.";
  $message_contents[]="Pellentesque ac lectus sit amet orci dictum finibus.";
  $message_contents[]="Phasellus placerat orci sed vehicula blandit.";
  $message_contents[]="Cras maximus nulla id erat tempor, vitae malesuada urna auctor.";
  $message_contents[]="Sed varius metus quis elit accumsan laoreet.";
  $message_contents[]="Etiam porta orci at nulla dapibus, in pretium ligula rutrum.";
  $message_contents[]="Ut sed dui tristique velit malesuada pharetra hendrerit ac purus.";
  $message_contents[]="Suspendisse et odio sit amet ante mattis congue.";
  $message_contents[]="Suspendisse in urna sed urna ultricies consectetur eget a quam.";
  $message_contents[]="Proin venenatis nibh id diam rhoncus, varius luctus augue hendrerit.";
  $message_contents[]="Pellentesque eu odio mollis, aliquet felis et, convallis lacus.";
  $message_contents[]="Integer imperdiet ipsum in orci ornare, at placerat dolor commodo.";
  $message_contents[]="Duis ultrices est nec diam ultricies facilisis.";
  $message_contents[]="Cras condimentum ipsum malesuada diam pulvinar congue.";
  $message_contents[]="Nullam elementum turpis eu turpis fringilla malesuada.";
  $message_contents[]="Nullam sit amet turpis eu sapien blandit vestibulum.";
  $message_contents[]="Phasellus quis sapien porta elit sollicitudin laoreet.";
  $message_contents[]="Etiam non enim hendrerit, hendrerit sem sed, porttitor enim.";
  $message_contents[]="Vestibulum cursus nisi a urna tristique ornare.";
  $message_contents[]="Nullam et turpis ac nisi rutrum rutrum.";
  $message_contents[]="Vestibulum convallis tortor et massa rutrum, sit amet sollicitudin lacus vestibulum.";
  $message_contents[]="Vivamus rutrum tortor ac viverra suscipit.";
  $message_contents[]="Fusce ut quam eget elit blandit tristique a eget lacus.";
  $message_contents[]="Nam ut magna pellentesque, tristique magna vehicula, sagittis justo.";
  $message_contents[]="Vestibulum sodales erat et egestas laoreet.";
  $message_contents[]="Nullam feugiat massa id suscipit gravida.";
  $message_contents[]="Morbi ac sem accumsan, convallis sapien non, ultrices felis.";
  $message_contents[]="Integer sodales sem sed augue varius, quis feugiat mi suscipit.";
  $message_contents[]="Integer at mauris ornare, condimentum ex nec, accumsan velit.";
  $message_contents[]="Nam at purus nec ipsum viverra finibus eu sit amet tellus.";
  $message_contents[]="Donec a eros fringilla, laoreet ligula eget, suscipit arcu.";
  $message_contents[]="Fusce ut ante ac purus faucibus consequat.";
  $message_contents[]="Suspendisse viverra libero id magna consequat, vitae vestibulum mauris sollicitudin.";
  $message_contents[]="Nullam consequat sapien id tellus elementum, a consequat velit aliquam.";
  $message_contents[]="Aenean vitae nulla condimentum ligula ornare sagittis.";
  $message_contents[]="Suspendisse ultrices nulla laoreet elit tincidunt scelerisque.";
  $message_contents[]="Fusce fringilla nunc dictum dolor cursus, eget gravida odio euismod.";
  $message_contents[]="Donec eget lectus eu est dictum imperdiet.";
  $message_contents[]="Mauris sed orci ut quam gravida condimentum.";
  $message_contents[]="Pellentesque malesuada ante id nisl porta, in pellentesque dui rutrum.";
  $message_contents[]="Ut consectetur leo sit amet nisl fermentum tincidunt.";
  $message_contents[]="Donec sagittis arcu eget molestie volutpat.";
  $message_contents[]="Nam mollis ipsum iaculis, laoreet sapien non, sollicitudin sem.";
  $message_contents[]="Donec eu arcu congue, pretium leo et, egestas nunc.";
  $message_contents[]="Aenean posuere nunc at dui eleifend, et sagittis eros tincidunt.";
  $message_contents[]="Vivamus sodales orci mattis lectus maximus, non sagittis diam pharetra.";
  $message_contents[]="Vestibulum tempor mi at laoreet pulvinar.";
  $message_contents[]="Praesent finibus dolor pretium nibh varius luctus ac tristique odio.";
  $message_contents[]="Nunc fermentum nulla eget risus hendrerit imperdiet.";
  $message_contents[]="Aliquam posuere tortor sed purus vehicula hendrerit a id leo.";
  $message_contents[]="Integer commodo est sit amet dui sodales fringilla.";
  $message_contents[]="Vestibulum iaculis lacus rhoncus dictum finibus.";
  $message_contents[]="Mauris ac leo lobortis, malesuada nulla eu, sagittis justo.";
  $message_contents[]="Sed pellentesque orci in posuere tempus.";
  $message_contents[]="Ut semper dui vel mi ornare egestas.";
  $message_contents[]="Nulla semper libero in enim tempor commodo.";
  $message_contents[]="Donec volutpat neque vitae erat lacinia iaculis.";
  $message_contents[]="Etiam luctus elit eu interdum vestibulum.";
  $message_contents[]="Donec quis erat ac est viverra iaculis.";
  $message_contents[]="Praesent ultrices elit quis nulla mollis, ac pellentesque lacus venenatis.";
  $message_contents[]="Cras luctus elit venenatis eros egestas volutpat.";
  $message_contents[]="Morbi imperdiet massa eget lacus efficitur dapibus.";
  $message_contents[]="Cras eleifend quam in sagittis pulvinar.";
  $message_contents[]="Aliquam euismod purus in vestibulum rhoncus.";
  $message_contents[]="Nullam luctus nibh eu mi tristique molestie.";
  $message_contents[]="Suspendisse tincidunt enim ac leo semper bibendum.";
  $message_contents[]="Vivamus egestas nisl eget aliquet varius.";
  $message_contents[]="Ut accumsan augue sit amet finibus consectetur.";
  $message_contents[]="Vestibulum placerat dui sit amet egestas maximus.";
  $message_contents[]="Nulla ut dui et enim maximus dapibus.";
  $message_contents[]="Nam tempus quam at elementum viverra.";
  $message_contents[]="Maecenas eu risus varius, viverra nibh et, malesuada velit.";
  $message_contents[]="Proin hendrerit purus vel massa pulvinar blandit.";
  $message_contents[]="Donec ut magna in enim tristique maximus vitae et ante.";
  $message_contents[]="Mauris in dolor auctor, vulputate arcu vel, elementum erat.";
  $message_contents[]="Etiam sed ligula in ipsum vulputate mollis sed bibendum tortor.";
  $message_contents[]="Integer id massa et odio elementum efficitur.";
  $message_contents[]="Nullam accumsan leo vitae turpis scelerisque rhoncus.";
  $message_contents[]="Sed vel ipsum at sapien sollicitudin porttitor quis non metus.";
  $message_contents[]="In lacinia nisi nec lectus hendrerit, blandit placerat libero tincidunt.";
  $message_contents[]="Duis a ligula congue lectus sollicitudin consequat.";
  $message_contents[]="Donec sit amet nisi dignissim, lacinia arcu et, condimentum lacus.";
  $message_contents[]="Donec egestas est sed neque bibendum, in tincidunt nunc convallis.";
  $message_contents[]="Phasellus ut augue interdum, aliquam nisl quis, faucibus massa.";
  $message_contents[]="Mauris sed purus non augue pellentesque commodo.";
  $message_contents[]="Proin nec est placerat, interdum risus ac, dapibus elit.";
  $message_contents[]="Pellentesque dapibus massa id dictum malesuada.";
  $message_contents[]="Ut ac leo ut ante varius iaculis.";
  $message_contents[]="Vestibulum ut sem viverra, placerat purus sit amet, mattis magna.";
  $message_contents[]="Donec iaculis ante vel sapien luctus consequat.";
  $message_contents[]="Aliquam tempor neque sit amet eros tristique, sit amet aliquet tellus molestie.";
  $message_contents[]="Nullam volutpat odio non enim volutpat, sit amet lobortis orci ultrices.";
  $message_contents[]="Ut eu ex vitae tortor interdum pretium.";
  $message_contents[]="Sed dapibus ex id dapibus porta.";
  $message_contents[]="Donec fermentum eros et arcu suscipit, id vulputate sem pulvinar.";
  $message_contents[]="Integer dictum lectus nec tristique venenatis.";
  $message_contents[]="Aenean porta ligula sit amet nibh vestibulum, id accumsan ante condimentum.";
  $message_contents[]="Sed vel mi at orci blandit placerat id in lacus.";
  $message_contents[]="Aenean efficitur massa non urna porttitor faucibus.";
  $message_contents[]="Aliquam consequat erat eu arcu fringilla malesuada.";
  $message_contents[]="Praesent maximus justo in rhoncus pellentesque.";
  $message_contents[]="Vivamus elementum erat et ipsum vulputate, et egestas magna dapibus.";
  $message_contents[]="Aliquam quis elit blandit, convallis justo sed, convallis erat.";
  $message_contents[]="Duis sollicitudin lacus eu ligula ultricies vulputate quis mattis nunc.";
  $message_contents[]="Sed venenatis velit eu urna placerat tempus.";
  $message_contents[]="Maecenas sit amet lorem pulvinar lorem cursus volutpat.";
  $message_contents[]="Curabitur non dolor id enim tincidunt fringilla et at purus.";
  $message_contents[]="Integer id odio eget urna pellentesque euismod a quis nunc.";
  $message_contents[]="Phasellus porta erat vel eros porta luctus quis lobortis ligula.";
  $message_contents[]="Aliquam porta eros vel molestie hendrerit.";
  $message_contents[]="Donec posuere nisl ut lacus condimentum varius.";
  $message_contents[]="Sed mattis justo ut diam aliquam, et aliquet est dictum.";
  $message_contents[]="Donec ornare dolor quis erat consectetur, vitae aliquet est auctor.";
  $message_contents[]="Cras sollicitudin sem malesuada, ultrices nunc ac, vehicula nisl.";
  $message_contents[]="Proin at augue ac mi semper lacinia dictum sit amet nibh.";
  $message_contents[]="Proin eu orci hendrerit, vestibulum dui eu, lobortis lorem.";
  $message_contents[]="Quisque lobortis velit ut ultrices tempus.";
  $message_contents[]="Nam sed justo eget orci consequat pulvinar et vulputate lacus.";
  $message_contents[]="Curabitur non velit venenatis, tristique diam quis, vestibulum massa.";
  $message_contents[]="Integer iaculis dolor aliquet, scelerisque elit a, laoreet ligula.";
  $message_contents[]="In posuere orci congue, rutrum metus eget, sollicitudin velit.";
  $message_contents[]="Etiam porta est vitae dui semper, quis vestibulum lacus vehicula.";
  $message_contents[]="Ut nec sapien sollicitudin, fermentum velit a, sollicitudin neque.";
  $message_contents[]="Fusce ut leo faucibus, rutrum mauris nec, dictum lorem.";
  $message_contents[]="Etiam sit amet neque sit amet magna interdum egestas sed eu mi.";
  $message_contents[]="Mauris ut orci bibendum, consectetur augue id, rhoncus ligula.";
  $message_contents[]="Curabitur ac lorem sit amet est tincidunt suscipit et quis nisi.";
  $message_contents[]="Etiam varius est imperdiet feugiat dignissim.";
  $message_contents[]="Donec semper libero eget laoreet auctor.";
  $message_contents[]="Nunc consequat velit ac nisl maximus, nec sagittis massa rutrum.";
  $message_contents[]="Nullam vitae mi posuere, lacinia nunc in, elementum velit.";
  $message_contents[]="In vel justo viverra, sodales neque quis, mattis diam.";
  $message_contents[]="Praesent sit amet turpis ut dolor convallis tristique.";
  $message_contents[]="Cras aliquam risus rutrum, consectetur justo a, blandit lacus.";
  $message_contents[]="Mauris quis diam et metus tincidunt lacinia.";
  $message_contents[]="Vivamus gravida augue at commodo commodo.";
  $message_contents[]="Etiam lobortis urna ac venenatis accumsan.";
  $message_contents[]="Cras eu eros in sapien pretium vehicula id sed nunc.";
  $message_contents[]="Vivamus in velit rhoncus, venenatis odio vitae, lacinia dolor.";
  $message_contents[]="Aliquam mattis dolor ut mi accumsan porta.";
  $message_contents[]="Praesent efficitur mauris non nisi egestas, vitae vehicula tellus dapibus.";
  $message_contents[]="Donec laoreet justo vehicula, facilisis risus vitae, tempus tortor.";
  $message_contents[]="Pellentesque eget ante sed mauris feugiat aliquet eget vel mauris.";
  $message_contents[]="Aenean at risus molestie, sodales metus nec, malesuada sem.";
  $message_contents[]="Suspendisse tincidunt nunc eu ante ullamcorper tristique.";
  $message_contents[]="Etiam egestas felis sit amet metus gravida eleifend.";
  $message_contents[]="Maecenas at dui facilisis, interdum arcu a, sodales ipsum.";
  $message_contents[]="Sed dapibus metus vitae bibendum facilisis.";
  $message_contents[]="In in purus in felis molestie pellentesque.";
  $message_contents[]="Cras luctus arcu ut nulla gravida viverra.";
  $message_contents[]="Nam aliquet turpis vitae erat placerat, sed lobortis erat consectetur.";
  $message_contents[]="Curabitur eu lorem eget nulla pharetra fringilla.";
  $message_contents[]="Maecenas sed risus porta, condimentum nulla vel, vehicula nulla.";
  $message_contents[]="Donec eu sapien sed nibh blandit condimentum.";
  $message_contents[]="Etiam sit amet leo congue, feugiat lectus quis, dignissim lectus.";
  $message_contents[]="Phasellus rutrum turpis quis viverra posuere.";
  $message_contents[]="Quisque fermentum ante ac dolor cursus, ut efficitur nulla congue.";
  $message_contents[]="Aliquam commodo nisi vitae ex pellentesque ornare.";
  $message_contents[]="Duis blandit sem non ornare viverra.";
  $message_contents[]="Nullam sit amet mi ut sem bibendum ornare et vitae ipsum.";
  $message_contents[]="Vestibulum venenatis justo et neque convallis semper.";
  $message_contents[]="Morbi mollis nulla eleifend, tincidunt sem non, sagittis lacus.";
  $message_contents[]="Vivamus non est ac metus malesuada ullamcorper.";
  $message_contents[]="Fusce condimentum eros ac elit iaculis, id sollicitudin leo gravida.";
  $message_contents[]="Aenean fermentum lectus rutrum lectus pulvinar ornare sit amet sed arcu.";
  $message_contents[]="Cras mollis enim eu rutrum lobortis.";
  $message_contents[]="Ut dictum velit et lectus consequat, nec accumsan enim mollis.";
  $message_contents[]="Nunc rutrum tortor eget tortor lobortis finibus.";
  $message_contents[]="Proin nec dui a nulla tempor porta porttitor ut nibh.";



  $table="users";
  deleteInBD($table);
  $table="user_favorites";
  deleteInBD($table);
  $table="conversations";
  deleteInBD($table);
  $table="messages";
  deleteInBD($table);

  $message_count=1;
  $conversations_count=1;
  $user_favorites_count=1;
  for($i=1;$i<sizeof($user_fnames);$i++){
    $table="users";
    $data=array();
    $data["id_user"]=$i;
    $data["email"]=$user_emails[$i];
    $data["password"]=sha1("password");
    $data["fname"]=$user_fnames[$i];
    $data["lname"]=$user_lnames[$i];
    $data["created"]=getTimestamp();
    $data["phone"]="No Phone";
    $data["last_connection"]=getTimestamp();
    $data["session_key"]=sha1("session".$i);
    $data["device_key"]=sha1("device".$i);
    $data["system"]="ios";
    $data["active"]=1;
    $data["verification_code"]=sha1("verification".$i);
    $data["lost_password_code"]=sha1("password".$i);
    $data["deleted"]=0;
    addInBD($table,$data);
    $user=$data;

    $random_user_favorites=rand(1, 15);
    for ($j=1;$j<=$random_user_favorites;$j++){
      $table="brands";
      $filter=array();
      $filter["id_brand"]=array("operation"=>"=","value"=>rand(1, 100));
      $brand=getInBD($table,$filter);

      $table="user_favorites";
      $filter=array();
      $filter["id_brand"]=array("operation"=>"=","value"=>$brand["id_brand"]);
      $filter["id_user"]=array("operation"=>"=","value"=>$user["id_user"]);

      while(isInBD($table,$filter)){
        $table="brands";
        $filter=array();
        $filter["id_brand"]=array("operation"=>"=","value"=>rand(1, 100));
        $brand=getInBD($table,$filter);

        $table="user_favorites";
        $filter=array();
        $filter["id_brand"]=array("operation"=>"=","value"=>$brand["id_brand"]);
        $filter["id_user"]=array("operation"=>"=","value"=>$user["id_user"]);

      }

      $table="user_favorites";
      $data=array();
      $data["id_user_favorite"]=$user_favorites_count;
      $user_favorites_count++;
      $data["id_user"]=$user["id_user"];
      $data["id_brand"]=$brand["id_brand"];
      $data["created"]=getTimestamp();
      addInBD($table,$data);



      $table="conversations";
      $data=array();
      $data["id_conversation"]=$conversations_count;
      $conversations_count++;
      $data["id_brand"]=$brand["id_brand"];
      $data["conversation_key"]=sha1($user["email"].$brand["id_brand"].$timestamp);
      $data["brand_name"]=$brand["name"];
      $data["brand_username"]=$brand["username"];
      $data["id_user"]=$user["id_user"];
      $data["user_email"]=$user["email"];
      $data["user_fname"]=$user["fname"];
      $data["user_lname"]=$user["lname"];
      $data["id_stage"]=1;
      $data["flag_new_message_user"]=0;
      $data["flag_new_message_brand"]=0;
      $data["system"]="ios";
      $data["assigned_id_admin"]=$brand["id_brand"];
      $data["created"]=getTimestamp();
      $data["active"]=1;
      $data["last_message"]=1;
      $data["last_message_creation"]=getTimestamp();
      addInBD($table,$data);

      $conversation=$data;

      $messages_sent=rand(1, 50);
      for($w=1;$w<=$messages_sent;$w++){
        $table="messages";
        $data=array();
        $data["id_message"]=$message_count;
        $message_count++;
        $data["id_conversation"]=$conversation["id_conversation"];
        $data["message_key"]=sha1("message".$data["id_message"]);
        $data["id_brand"]=$brand["id_brand"];
        $data["id_admin"]=$brand["id_brand"];
        $data["id_user"]=$user["id_user"];
        if(rand(1,2) % 2==0){
          $data["sender"]="user";
        }else{
          $data["sender"]="brand";
        }
        $data["type"]="text";
        $random_index=rand(0, 200);
        $data["content"]=$message_contents[$random_index];
        $data["created"]=getTimestamp();
        addInBD($table,$data);
        $message=$data;

        $table="conversations";
        $filter=array();
        $filter["id_conversation"]=array("operation"=>"=","value"=>$conversation["id_conversation"]);
        $data=array();
        $data["last_message"]=$message["content"];
        $data["last_message_creation"]=$message["created"];
        updateInBD($table,$filter,$data);
      }


    }

  }

?>
