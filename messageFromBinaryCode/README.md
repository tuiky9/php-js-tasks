<h2>Message From Binary Code</h2>
<div><p>During an Escape Room built for programmers, you spot a binary string hidden behind a vase. You suspect each block of <code>8</code> consecutive bits encodes one character via its <a href="http://www.ascii-code.com/" target="_blank">extended ASCII</a> code value.</p>
<p>Decode the hidden message under that assumption.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>code = "0100000101000010"</code>, the output should be<br>
<code>messageFromBinaryCode(code) = "AB"</code>.</li>
<li>For <code>code = "01100001"</code>, the output should be<br>
<code>messageFromBinaryCode(code) = "a"</code>.</li>
<li>For <code>code = "0011000100110010"</code>, the output should be<br>
<code>messageFromBinaryCode(code) = "12"</code>.</li>
<li>For <code>code = "0101100001011001"</code>, the output should be<br>
<code>messageFromBinaryCode(code) = "XY"</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string code</strong></p>
<p>The ciphertext, containing only <code>'0'</code> and <code>'1'</code>.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 &lt; code.length &lt; 800</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
<ul>
<li>The decoded plaintext message.</li>
</ul>
</li>
</ul>

</div>
<p><strong>Run test:</strong> <code>../vendor/bin/phpunit -c ../phpunit.xml php/MessageFromBinaryCodeTest.php</code></p>
