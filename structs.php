<?php include("Lib/Content/back.php"); ?>


<h2> Structure </h2>
<p>Our teacher gave us a assignment where we had to recieve the input
  <br>from a user and save it to a file ( txt file ). </p>
<p><a href=""Github repo </p>
<div class="codeBackground">
<pre><code><span class="code_include">#include</span> &lt;stdio.h&gt
<span class="code_include">#include</span> &lt;string.h&gt

  <span class="code_datatype">struct</span> PersonData
  {
      <span class="code_datatype">char</span> name[32];
      <span class="code_datatype">char</span> country[64];
      <span class="code_datatype">char</span> city[64];
      <span class="code_datatype">int</span> age[2];
      <span class="code_datatype">char</span> motto[128];
  };


  <span class="code_datatype">int</span> <span class="code_function">main()</span>
  {
      <span class="code_datatype">char</span> name[32];
      <span class="code_datatype">char</span> country[64];
      <span class="code_datatype">char</span> city[64];
      <span class="code_datatype">int</span> age[2];
      <span class="code_datatype">char</span> motto[128];

      <span class="code_datatype">struct</span> PersonData person_data;

      <span class="code_function">printf</span>("Enter your name: ");
      <span class="code_function">gets</span>(name);
      <span class="code_function">strcpy</span>(person_data.name, name);

      <span class="code_function">printf</span>("Enter your country: ");
      <span class="code_function">gets</span>(country);
      <span class="code_function">strcpy</span>(person_data.country, country);

      <span class="code_function">printf</span>("Enter your city: ");
      <span class="code_function">gets</span>(city);
      <span class="code_function">strcpy</span>(person_data.city, city);

      <span class="code_function">printf</span>("Enter your age: ");
      <span class="code_function">gets</span>(age);
      <span class="code_function">strcpy</span>(person_data.age, age);

      <span class="code_function">printf</span>("Enter your motto: ");
      <span class="code_function">gets</span>(motto);
      <span class="code_function">strcpy</span>(person_data.motto,motto);

      <span class="code_datatype">FILE</span> *pdata;
      <span class="code_datatype">pdata</span> = <span class="code_function">fopen</span>("personFile.txt","w");
      <span class="code_function">fprintf</span>(pdata,"Name: %s\n",person_data.name);
      <span class="code_function">fprintf</span>(pdata,"Country: %s\n",person_data.country);
      <span class="code_function">fprintf</span>(pdata,"City: %s\n",person_data.city);
      <span class="code_function">fprintf</span>(pdata,"Age: %s\n",person_data.age);
      <span class="code_function">fprintf</span>(pdata,"Motto: %s\n",person_data.motto);
      <span class="code_function">fclose</span>(pdata);

      <span class="code_comment">/* van tutorial overgenomen */ </span>
      <span class="code_datatype">FILE</span> *ptr_file;
      		<span class="code_datatype">char</span> text[1000];

      		ptr_file =<span class="code_function">fopen</span>("personFile.txt","r");
      		if (!ptr_file)
          		<span class="code_datatype">return</span> 1;

      		<span class="code_datatype">while</span> (<span class="code_function">fgets</span>(text,1000, ptr_file)!=NULL)
          		<span class="code_function">printf</span>("\n%s",text);

  		<span class="code_function">fclose</span>(ptr_file);
      		<span class="code_datatype">return</span> 0;

     <span class="code_datatype">return</span> 0;
  }
</code></pre>
</div>
