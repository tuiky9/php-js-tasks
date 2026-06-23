<h2>Variable Name</h2>
<div class="markdown"><p>A valid variable name contains only English letters, digits, and underscores, and cannot start with a digit.</p>
<p>Check whether the given string is a valid variable name.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>name = "_Aas_23"</code>, the output should be<br>
<code>variableName(name) = true</code>;</li>
<li>For <code>name = " variable"</code>, the output should be<br>
<code>variableName(name) = false</code>;</li>
<li>For <code>name = "qq-q"</code>, the output should be<br>
<code>variableName(name) = false</code>;</li>
<li>For <code>name = "2w2"</code>, the output should be<br>
<code>variableName(name) = false</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string name</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ name.length ≤ 10</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if <code>name</code> is a valid variable name, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/VariableNameTest.php</code></p>
