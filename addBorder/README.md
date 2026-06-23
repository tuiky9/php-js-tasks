<h2>Add Border</h2>
<div class="markdown"><p>You are given a rectangular grid of characters represented as an array of equal-length strings. Surround the entire grid with a one-character-wide frame made of asterisks (<code>*</code>).</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For</p>
<pre><code>picture = ["a"]
</code></pre>
<p>the output should be</p>
<pre><code>addBorder(picture) = ["***",
                      "*a*",
                      "***"]
</code></pre>
<p>For</p>
<pre><code>picture = ["aa", "bb", "cc"]
</code></pre>
<p>the output should be</p>
<pre><code>addBorder(picture) = ["****",
                      "*aa*",
                      "*bb*",
                      "*cc*",
                      "****"]
</code></pre>
<p>For</p>
<pre><code>picture = ["hello", "world"]
</code></pre>
<p>the output should be</p>
<pre><code>addBorder(picture) = ["*******",
                      "*hello*",
                      "*world*",
                      "*******"]
</code></pre>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.string picture</strong></p>
<p>A non-empty array of non-empty equal-length strings.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ picture.length ≤ 100</code>,<br>
<code>1 ≤ picture[i].length ≤ 100</code>.</p>
</li>
<li>
<p><strong>[output] array.string</strong></p>
<ul>
<li>The same matrix of characters, framed with a border of asterisks of width <code>1</code>.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/AddBorderTest.php</code></p>
