<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php include("naglowek.php"); ?>

<div id="right">

<div id="floatMenu">
<hr/>
<?php include("boczne_menu.php"); ?>
<hr/>
</div>

</div>
<div id="content">
 
 <h3>CSS - Kaskadowe arkusze stylów</h3>
<p>Kaskadowe arkusze stylów (Cascading Style Sheet - CSS) służą definiowaniu sposobu wyświetlania elementów HTML. Rozdzialają treść strony od jej wyglądu i umożliwiają łatwe zmiany. Podobnie jak w przypadku skryptów Javascript istnieje kilka sposobów użycia CSS w kodzie strony. </p>
<p>W postaci zewnętrznego arkusza stylów - czyli pliku tekstowego z rozszerzeniem .css, do którego odsyłacz znajduje się w nagłówku strony:</p>
<pre class="brush:xml">

 &lt;head&gt;
 (...)
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/style/style_mapy.css&quot;&gt;
 (...)
&lt;/head&gt;

</pre>
<p>
Kod CSS można umieścić też jako tzw. wewnętrzy arkusz stylów. Są one w tym momencie zebrane w jednym miejscu (przeważnie w nagłówku) w kodzie strony pomiędzy znacznikami <b>&lt;style&gt &lt;/style&gt</b>
</p>
<pre class="brush:css">
&lt;head&gt;
 (...)
&lt;style&gt;
body {
    background-color: white;
}
h1 {
    color: black;
    margin-left: 10px;
    font-size: 1.1em;
}
&lt;/style&gt;
 (...)
&lt;/head&gt;
</pre>
<p>Trzecią możliwością jest nadanie stylu bezpośrednio pojedynczemu elementowi HTML np.</p>
<pre class="brush:css">
 &lt;h1 style=&quot;color:red; font-size=2em;&quot;&gt;Witaj przybyszu!&lt;/h1&gt;
</pre>
<p>Przy czym ostatniego ze sposobów należy używać jak najrzadziej - prowadzi do braku czytelności kodu i utrudnia rozdział treści od wyglądu.</p>

  <h3>Składnia CSS</h3>
<p>Poniżej podstawowe elementy składni CSS.</p>
<ol>
<li>Pojedynczy element CSS składa się z <b>selektora</b> określającego element HTML, którego ma dotyczyć dany styl, oraz <b>deklaracji stylu</b> podanych w parach <b>właściwość:wartość</b>.

<pre class="brush:css">
 p {color:red;text-align:center;text-size=12pt;}
 /*powyższy styl dotyczy wszystkich paragrafów*/
 
 /*czytelniejszy zapis 
 dla wielu właściwości:*/
  p {
  	color:red;
  	text-align:center;
  	text-size=12pt;
  }
</pre>
</li>
<li>
Selektory CSS mogą wskazywać na dany typ elementów HTML, identyfikator lub klasę:

<pre class="brush:css">
  /* selektor elementu */  
  
  h1 {
  	color:black;
  }
  
   /* selektor unikalnego identyfikatora
   np. &lt;p id=&quot;pierwszy_akapit&quot;&gt; */  
   
  #pierwszy_akapit {
  	color:blue;
  }
  
    /* selektor klasy - może być nadawana wielu obiektom
    np. &lt;h1 class=&quot;wazne&quot;&gt; */ 
     
  .wazne {
  	color:red;
  }
</pre>
</li>
<li>Podstawowym elementem, klockiem budującym stronę, dla którego określane są strony jest <b>div</b>:
<pre class="brush:xml">

&lt;div id=&quot;map&quot;&gt;&lt;!--Tutaj wstawiona zostanie mapa--&gt;&lt;/div&gt;

</pre>

</li>
<li>
Kaskadowość stylów oznacza, że łączą się one kaskadowo w jedną definicję stylu dla strony nawet jeśli pochodzą z róznych żródeł. Przy czym jeśli deklaracje się powielają w róznych miejscach to stosowana jest hierchia ważności, taka, ze  najważniejsze są deklaracje najbardziej szczegółowe:
<ol>
<li>Styl określony dla pojedynczego elementu</li>
<li>Wewnętrzny arkusz stylów (w nagłówku)</li>
<li>Zewnętrzny arkusz stylów</li>
<li>Domyślny styl przeglądarki</li>
</ol>
Oznacza to, że jeśli dany element ma deklaracje w kilku miejscach, to zostaną one zebrane w jednym miejscu, przy czym  przy sprzecznych wartościach jako ostateczna zostanie przyjęta deklaracja stojąca najwyżej w hierarchii.
</li>
</ol>

</div>
<br/>
<br/>
<script type="text/javascript">
SyntaxHighlighter.defaults['toolbar'] = false
     SyntaxHighlighter.all()
</script>
<div id="footer">
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">
<img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" />
</a>
<br />All materials on this page by 
<span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Michał Rzeszewski</span> are licensed under a 
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"> Creative Commons BY SA license</a>.
</div>
	</div>
	</div>
	</div>
</div>
</div></body>
</html>
