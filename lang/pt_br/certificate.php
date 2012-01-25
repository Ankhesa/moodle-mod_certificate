<?PHP // $Id: certificate.php,v 3.1.9 2008/01/20

/**
 * Strings for component 'block_mentees', language 'pt_br', branch 'MOODLE_21_STABLE'
 *
 * @package   block_mentees
 * @copyright 2011 onwards Leonardo Gon�alves  {@link http://twitter.com/leogalpao}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


//General functions
$string['modulename'] = 'Certificado';
$string['modulenameplural'] = 'Certificados';
$string['certificatename'] = 'Nome do certificado';
$string['certificate:view'] = 'Ver Certificado';
$string['certificate:manage'] = 'Gerenciar certificado';
$string['certificate:printteacher'] = 'Mostrar Professor';
$string['certificate:student'] = 'Ober certificado';

//Adding an instance
$string['intro'] = 'Introdu��o';
$string['addlinklabel'] = 'Adicionar outra op��o de atividade';
$string['addlinktitle'] = 'Click para adicionar outra op��o de atividade';
$string['issueoptions'] = 'Op��es de emiss�o';
$string['textoptions'] = 'Op��es de Texto';
$string['designoptions'] = 'Op��es de Design';
$string['lockingoptions'] = 'Op��es de bloqueio';
$string['certificatetype'] = 'Tipo de certificado';
$string['emailteachers'] = 'Email do professor';
$string['emailothers'] = 'Outros emails';
$string['savecertificate'] = 'Salvar Certificado';
$string['deliver'] = 'Enviar';
$string['download'] = 'For�ar Download';
$string['openbrowser'] = 'Abrir em uma nova janela';
$string['emailcertificate'] = 'Email (Requer salvar!)';
$string['border'] = 'Borda';
$string['borderstyle'] = 'Imagem da borda';
$string['borderlines'] = 'Linhas';
$string['bordercolor'] = 'Linhas de borda';
$string['borderblack'] = 'Preto';
$string['borderbrown'] = 'Marrom';
$string['borderblue'] = 'Azul';
$string['bordergreen'] = 'Verde';
$string['printwmark'] = 'Marca D\'�gua';
$string['datehelp'] = 'Data';
$string['dateformat'] = 'Formato da data';
$string['userdateformat'] = 'Formato de data do usu�rio';
$string['receiveddate'] = 'Data de recebimento';
$string['courseenddate'] = 'Data do fim do treinamento (Deve ser definido!)';
$string['gradedate'] = 'Data da nota';
$string['printcode'] = 'Imprimir C�digo';
$string['printgrade'] = 'Imprimir data';
$string['printoutcome'] = 'Imprimir Resultado';
$string['nogrades'] = 'Notas n�o dispon�veis';
$string['gradeformat'] = 'Formato de nota';
$string['gradepercent'] = 'Percentual';
$string['gradepoints'] = 'Num�rica(em pontos)';
$string['gradeletter'] = 'Letras';
$string['printhours'] = 'Imprimir total de horas de treinamento';
$string['printsignature'] = 'Mostrar Assinatura Digital';
$string['sigline'] = 'Linha';
$string['printteacher'] = 'Mostrar o(s) nome(s) do(s) Professor(es)';
$string['customtext'] = 'Texto Personalizado';
$string['printdate'] = 'Mostrar Data';
$string['printseal'] = 'Mostrar Selo ou Logo';
$string['lockgrade'] = 'Bloquear por nota';
$string['requiredgrade'] = 'Nota m�nima exigida';
$string['coursetime'] = 'tempo m�nimo exigido';
$string['linkedactivity'] = 'Atividade ligada';
$string['minimumgrade'] = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nota Obrigat�ria';
$string['activitylocklabel'] = 'Atividade ligada/Nota m�nima %';
$string['coursetimedependency'] = 'Tempo m�nimo em minutos no curso';
$string['activitydependencies'] = 'Atividades dependentes';

//Strings for verification block
$string['entercode'] = 'Digite o c�digo de certificado para verificar:';
$string['validate'] = 'Verificar';
$string['certificate'] = 'Verifica��o de c�digo de certificado:';
$string['verifycertificate'] = 'Verificar certificado';
$string['notfound'] = 'O n�mero do certificado n�o p�de ser validado.';
$string['back'] = 'Voltar';
$string['to'] = 'Concedido a';
$string['course'] = 'Para';
$string['date'] = 'em';
$string['grade'] = 'Nota';

//Certificate view, index, report strings
$string['incompletemessage'] = 'Para baixar o seu certificado, voc� deve primeiro preencher todos os requisitos'.'Atividades. Por Favor retorne ao treinamento e complete todas as atividades.';
$string['awardedto'] = 'Concedido para';
$string['issued'] = 'Emitido';
$string['notissued'] = 'N�o emitido';
$string['notissuedyet'] = 'Ainda n�o emitido';
$string['notreceived'] = 'Voc� n�o recebeu este certificado';
$string['getcertificate'] = 'Ober certificado';
$string['report'] = 'Relat�rio';
$string['code'] = 'C�digo';
$string['viewed'] = 'Voc� recebeu este certificado em:';
$string['viewcertificateviews'] = 'Ver {$a} Certificados emitidos';
$string['reviewcertificate'] = 'Rever seus certificados';
$string['openwindow'] = 'Clique no botao abaixo para abrir o seu certificado
em uma nova janela.';
$string['opendownload'] = 'Click no bot�o abaixo para salvar o seu certificado
no seu computador.';
$string['openemail'] = 'Click no bot�o abaixo e o seu certificado 
ser� enviado por email.';
$string['receivedcerts'] = 'Certificados recebidos';
$string['errorlockgrade'] = 'Sua nota atual em  {$a->mod} ({$a->current%}) est� abaixo do n�vel exigido ({$a->needed%}) para receber o certificado.';
$string['errorlocksurvey'] = 'Voc� precisa completar todo o treinamento antes de receber seu certificado.';
$string['errorlockgradecourse'] = 'Sua nota atual em  ({$a->current%}) est� abaixo do n�vel exigido ({$a->needed%}) para receber o certificado.';
$string['errorlocktime'] = 'Voc� deve primeiro alcan�ar a quantidade m�nima de tempo de trabalho neste treinamento antes de receber seu certificado.';
$string['errorlockmod'] = 'Voc� deve primeiro alcan�ar todos os requisitos m�nimos de atividades do treinamento antes de receber seu certificado.';

//Email text
$string['emailstudenttext'] = 'Enviar o seu certificado para {$a->course}.';
$string['awarded'] = 'Atribuido';
$string['emailteachermail'] = '
{$a->student} recebeu seu certificado: \'{$a->certificate}\'
for {$a->course}.

Voc� pode rever aqui:

    {$a->url}';
$string['emailteachermailhtml'] = '
{$a->student} recebeu seu certificado: \'<i>{$a->certificate}</i>\'
for {$a->course}.

Voc� pode rever aqui:

    <a href=\"{$a->url}\">Certificate Report</a>.';

//Names of type folders
$string['typeportrait'] = 'Retrato';
$string['typeletter_portrait'] = 'Retrato (Carta)';
$string['typelandscape'] = 'Paisagem';
$string['typeletter_landscape'] = 'paisagem (Carta)';
$string['typeunicode_landscape'] = 'Unicode (Paisagem)';
$string['typeunicode_portrait'] = 'Unicode (Retrato)';

//Print to certificate strings
$string['grade'] = 'Grade';
$string['coursegrade'] = 'Grade do Curso';
$string['credithours'] = 'Horas de Treinamento';

$string['titlelandscape'] = '';
$string['introlandscape'] = 'Certificamos que';
$string['statementlandscape'] = 'Completou o Treinamento';

$string['titleletterlandscape'] = '';
$string['introletterlandscape'] = 'Certificamos que';
$string['statementletterlandscape'] = 'Completou o Treinamento';

$string['titleportrait'] = '';
$string['introportrait'] = 'Certificamos que';
$string['statementportrait'] = 'Completou o Treinamento';
$string['ondayportrait'] = 'no dia';

$string['titleletterportrait'] = 'Certificado de Conclus�o';
$string['introletterportrait'] = 'Certificamos que';
$string['statementletterportrait'] = 'Completou o Treinamento';

//Certificate transcript strings
$string['notapplicable'] = 'N/A';
$string['certificatesfor'] = 'Certificado para';
$string['coursename'] = 'Treinamento';
$string['viewtranscript'] = 'Ver Certificado';
$string['mycertificates'] = 'Meus Certificados';
$string['nocertificatesreceived'] = 'Voc� ainda n�o recebeu nenhum certificado.';
$string['notissued'] = 'N�o recebido';
$string['reportcertificate'] = 'Relat�rio de Certificados';
$string['certificatereport'] = 'Relat�rio de Certificados';
$string['printerfriendly'] = 'P�gina para Impress�o';

// 2.0 strings
$string['activitydependencies_help'] = '<p>Escolha aqui as atividades do curso e suas respectivas notas m�nimas exigidas percentual que deve ser alcan�ada para receber o certificado. Quaisquer atividades que s�o classificadas de acordo com os pontos ser�o convertidos em um percentual para o c�lculo do grau necess�rio. </ P>
<p> Voc� tamb�m pode optar por bloquear o certificado com base na conclus�o de uma pesquisa, question�rio, ou atividade feedback. Para essas atividades, deixe o campo definido grau de &quot;No&quot;.  </p>';
$string['border_help'] = '<p>The Border Image option allows you to choose a border image from the certificate/pix/borders folder.  Select the border image that you want around the certificate edges or select no border. 
The folder includes two different border images, each in 4 different colors. </p>
<p>Keep in mind that adding images to the certificate will increase the size of the pdf file.  You can add your own border images to the certificate/pix/borders folder and they will also appear here in the dropdown.  The border images must be in the JPEG (.jpg) or PNG 8 (.png) format.
</p>';
$string['bordercolor_help'] = '<p> Since images can substantially increase the size of the pdf file, you may choose to print a border of lines instead of using a border image (be sure the Border Image option is set to No). </p>
<p> The Border Lines option will print a nice border of three lines of varying widths in the chosen color.</p>';
$string['certificatetype_help'] = '<p>This is where you determine the layout of the certificate. The certificate type folder includes four default certificates:</p>
<p><strong>New types can be added to the certificate/type folder. The names of the folders and any new language strings for the new type must be added to the certificate/lang/en_utf8/certificate.php file. </strong></p>
<p><strong>Landscape:</strong> prints on A4 size paper with landscape orientation.<br>
  <strong>Landscape Letter:</strong> prints on letter size paper with landscape orientation.<br>
  <strong>Portrait</strong>: prints on A4 size paper with portrait orientation.<br>
  <strong>Portrait Letter:</strong> prints on letter size paper with portrait orientation.</p>
<p>Most languages will print fine, even if they contain accents or umlauts. However, if your language  uses characters, you will need to choose a unicode type. These types use a different pdf library that embeds the entire font in the pdf. This will make the pdf files rather large; thus it is not recommended to use this type unless you must. </p>
<p>&nbsp;</p>';
$string['coursetime_help'] = 'Enter here the minimum amount of time, in minutes, that  a student must be logged into the course before they will be able to receive the certificate.';
$string['customtext_help'] = '<p>If you want the certificate to print different names for the teacher than those who are assigned
the role of teacher, do not select Print Teacher or any signature image except for the line image.  Enter the teacher names in this text box as you would like them to appear.  By default, this text is placed in the lower left of the certificate. You can change this placement in your certificate/type/&quot;type name&quot;/certificate.php file. </p>
<p>In that file, find the line of code similar to this at the very bottom of the page:</p>
<p>cert_printtext(150, 450, \'\', \'\', \'\', \'\', \'\'); </p>
<p>The two numbers reflect the X placement (over from the left) and Y placement (down from the top) values for the text. You can change these if you would like. </p>
<p>You can also use the text box to enter  html. For example, you can add a link or  an image.</p>

<div style="border: 1px solid black;font-size: 12px">
The following html tags are available:
<ul type="square">
<li>&lt;br&gt; and &lt;p&gt;</li>
<li>&lt;b&gt;, &lt;i&gt; and &lt;u&gt;</li>
<li>&lt;img&gt; (src and width (or height) are mandatory)</li>
<li>&lt;a&gt; (href is mandatory)</li>
<li>&lt;font&gt;: possible attributes are:<br />
  color: hex color code<br />
  face: arial, times, courier, helvetica, symbol </li></ul></div>
<p>Example html:</p>
<p>Mr. James Salesman, Manager&lt;br&gt;&lt;br&gt;Sales Department&lt;br&gt;&lt;br&gt;&lt;font color=&quot;#0000CC&quot;&gt;&lt;b&gt;Your Company&lt;font face=&quot;Symbol&quot;&gt;&amp;Ograve;&lt;/font&gt;&lt;/b&gt;&lt;/font&gt;&lt;img src=&quot;http://yourmoodle.com/mod/certificate/pix/seals/Logo.png&quot; width=&quot;100&quot;&gt;&lt;p&gt;&lt;a href=&quot;http://www.site.com target=&quot;_blank&quot;&gt;Click here&lt;/a&gt;&lt;/p&gt;</p>';
$string['datehelp_help'] = 'Choose a date format to print the date on the certificate. Or, choose the last option to have the date printed in the format of the user\'s chosen language.';
$string['delivery'] = 'Enviar';
$string['delivery_help'] = '<p>Choose here how you would like your students to get their certificate.</p>
<p><strong>Abrir no Navegador:</strong> Abrir o certificado em uma nova janela. 
<br>
<strong>For�ar Download:</strong> Opens the browser file download window. <strong>(Note: </strong>Internet Explorer does not support the open option from the download window. The save option must be chosen first.)<br>
<strong>Email Certificate:</strong> Choosing this option sends the certificate to the student as an email attachment.</p>
<p>After a student receives their certificate, if they click on the certificate link again, they will see the date they received their certificate and will be able to review their received certificate.</p>';
$string['emailothers_help'] = 'Enter the email addresses here, separated by a comma, of those who should be alerted with a short email whenever students receive a certificate.';
$string['emailteachers_help'] = 'If enabled, then teachers are alerted with a short email whenever students receive a certificate.';
$string['grade_help'] = '<p align="left">There are three available formats if you choose to print a grade on the certificate:</p>
<p align="left"><strong>Percentage Grade:</strong> Prints the grade as a percentage.<strong><br />
  Points Grade: </strong>Prints the point value of the grade. <br />
  <strong>Letter Grade:</strong> Prints the percentage grade as a letter.  The values for the letter grades can be customized in type/certificate.php.</p>';
$string['pluginadministration'] = 'Administra��o Certificado';
$string['pluginname'] = 'Certificado';
$string['printcode_help'] = 'A unique 10-digit code of random letters and numbers can be printed on the certificate. This number can then be verified by comparing it to the code number displayed in the teacher &quot;View Issued Certificates&quot; report.';
$string['printgrade_help'] = '<p>You can choose any available course grade items from the gradebook to print the user\'s grade received for that item on the certificate.  The grade items are listed in the order in which they appear in the gradebook. </p>
<p align="left">There are three available formats if you choose to print a grade on the certificate.</p>
<p align="left">Note: Once a user has received their certificate, their grade on the certificate will NOT change. </p>';
$string['printhours_help'] = 'Enter here the number of credit hours to be printed on the certificate.';
$string['printoutcome_help'] = '<p>You can choose any course outcome to print the name of the outcome and the user\'s received outcome on the certificate.</p>
<p>An example might be:</p>
<p> Assignment Outcome: Proficient </p>';
$string['printseal_help'] = '<p>This option allows you to select a seal or logo to print on the certificate from the certificate/pix/seals folder. Four seal images and an example  logo image are included. By default, this image is placed in the lower right corner of the certificate. You can change this placement in your certificate/type/&quot;type name&quot;/certificate.php file. </p>
<p>In that file, find the line of code similar to this one toward the bottom:</p>
<p> print_seal($certificate-&gt;printseal, $orientation, 590, 425, \'\', \'\'); </p>
<p>The two numbers reflect the X placement (over from the left) and Y placement (down from the top) values for the image. You can change these if you would like. </p>
<p>Keep in mind that adding images to the certificate will increase the size of the pdf file. 
You can add your own  images to the certificate/pix/seals folder and they will also appear here in 
the dropdown.  The  images must be in the JPEG (.jpg) or PNG 8 (.png) format. </p>';
$string['printsignature_help'] = '<p>This option allows you to  print a signature image from the certificate/pix/signatures folder.  You can print a graphic representation of a signature, or print a line for a written signature. A sample signature image and a line image are included.</p>
<p>By default, this image is placed in the lower left of the certificate. You can change this placement in your certificate/type/&quot;type name&quot;/certificate.php file. </p>
<p>In that file, find the line of code similar to this one toward the bottom:</p>
<p>print_signature($certificate-&gt;printsignature, $orientation, 110, 450, \'\', \'\');</p>
<p>The two numbers reflect the X placement (over from the left) and Y placement (down from the top) values for the image. You can change these if you would like. </p>
<p>Keep in mind that adding images to the certificate will increase the size of the pdf file. You can add your own images to the certificate/pix/signatures folder and they will also appear here in the dropdown.  The images must be in the JPEG (.jpg) or PNG 8 (.png) format. </p>
<p>&nbsp;</p>';
$string['printteacher_help'] = 'For printing the teacher name on the certificate, set the role of teacher at the module level.  Do this if, for example, you have more than one teacher for the course or you have more than one certificate in the course and you want to print different teacher names on each certificate.  Click to edit the certificate, then click on the Locally assigned roles tab.  Then assign the role of Teacher (editing teacher) to the certificate (they do not HAVE to be a teacher in the course--you can assign that role to anyone).  Those names will be printed on the certificate for teacher.';
$string['printwmark_help'] = '<p>A watermark file can be placed in the background of the certificate. A watermark is a faded graphic. A watermark could be a logo, seal, crest, wording, or whatever you want to use as a graphic background. Two watermark images are included, a sample school crest and a Fleur de lis.</p>
<p>Keep in mind that adding images to the certificate will increase the size of the pdf file. 
You can add your own  images to the certificate/pix/watermarks folder and they will also appear here in the dropdown.  The  images must be in the JPEG (.jpg) or PNG 8 (.png) 
format. </p>';
$string['requiredgrade_help'] = 'Choose the minimum required percentage course grade (the average grade of all graded activities in the course) that the student must achieve to receive the certificate. Any activities that are graded using points will be converted to a percentage for calculating the required grade.';
$string['save'] = 'Salvar';
$string['save_help'] = '<p>If you choose this option, then a copy of each student\'s certificate is saved in the course files moddata folder
for that certificate. A link to each student\'s saved certificate will be displayed in the teacher &quot;View Issued Certificates&quot; report. </p>';
$string['writing'] = 'Escrita';
$string['writing_help'] = 'Writing help';
?>