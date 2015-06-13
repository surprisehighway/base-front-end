<?php require '_includes/site-header.php'; ?>
	
	<div class="container" style="padding-top:30px;padding-bottom:30px;">

		<h1 class="title">Style Guide</h1>
		<p>Colors, typography, and base styles for this project.</p>

		<!-- COLORS -->
		<div class="sg-header" id="colors">
        	<h5>Colors <a href="#colors">#</a></h5>
    	</div>
	    <div class="sg-swatches">
            <div class="sg-swatch">
                <div class="sg-color" style="background:#00aef0;"></div>
                <div class="sg-label"> #00aef0<br><span class="sg-quiet">$color-blue</span></div>
            </div>
            <div class="sg-swatch">
                <div class="sg-color" style="background:#f26522;"></div>
                <div class="sg-label"> #f26522<br><span class="sg-quiet">$color-orange</span></div>
            </div>
            <div class="sg-swatch">
                <div class="sg-color" style="background:#666666;"></div>
                <div class="sg-label"> #666666<br><span class="sg-quiet">$gray</span></div>
            </div>
            <div class="sg-swatch">
                <div class="sg-color" style="background:#333333;"></div>
                <div class="sg-label"> #333333<br><span class="sg-quiet">$gray-dark</span></div>
            </div>
            <div class="sg-swatch">
                <div class="sg-color" style="background:#d3d3d3;"></div>
                <div class="sg-label">#d3d3d3<br><span class="sg-quiet">$gray-light</span></div>
            </div>
            <div class="sg-swatch">
                <div class="sg-color" style="background:#f8f2c6;"></div>
                <div class="sg-label">#f8f2c6<br><span class="sg-quiet">$color-highlight</span></div>
            </div>
            <div class="sg-swatch">
                <div class="sg-color" style="background:#990000;"></div>
                <div class="sg-label">#990000<br><span class="sg-quiet">$color-error</span></div>
            </div>
            <div class="sg-swatch">
                <div class="sg-color" style="background:#2d6f01;"></div>
                <div class="sg-label">#2d6f01<br><span class="sg-quiet">$color-success</span></div>
            </div>
        </div><!-- /.sg-swatches -->

        <!-- FONTS -->
		<div class="sg-header" id="fonts">
        	<h5>Font Stacks <a href="#fonts">#</a></h5>
    	</div>
        <div class="sg-section">
        	<p class="sg-quiet" style="float:right;margin:0;"><code>$font-family-default</code></p>
            <p class="font-default">
                Default font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif<br>
                <em>italic</em>, <strong>bold</strong>, <strong><em>bold italic</em></strong>
            </p>
            
            <p class="sg-quiet" style="float:right;margin:0;"><code>$font-family-headline</code></p>
            <p class="font-headline">
                Headline font-family: "Georgia", "Cambria", "Times New Roman", "Times", serif<br>
                <em>italic</em>, <strong>bold</strong>, <strong><em>bold italic</em></strong>
            </p>

            <p class="sg-quiet" style="float:right;margin:0;"><code>$font-family-display</code></p>
            <p class="font-display">
                Display font-family: "Georgia", "Cambria", "Times New Roman", "Times", serif<br>
                <em>italic</em>, <strong>bold</strong>, <strong><em>bold italic</em></strong>
            </p>
            
            <p class="sg-quiet" style="float:right;margin:0;"><code>$font-family-plain</code></p>
            <p class="font-plain">
                Plain font-family: Arial, sans-serif<br>
                <em>italic</em>, <strong>bold</strong>, <strong><em>bold italic</em></strong>
            </p>
        </div><!-- /.sg-section -->

        <!-- HEADINGS -->
        <div class="sg-header" id="headings">
        	<h5>Headings <a href="#headings">#</a></h5>
    	</div>
        <div class="sg-section">
            <h1 class="sg-no-margin">h1. First Level Heading</h1>
            <h2 class="sg-no-margin">h2. Second Level Heading</h2>
            <h3 class="sg-no-margin">h3. Third Level Heading</h3>
            <h4 class="sg-no-margin">h4. Fourth Level Heading</h4>
            <h5 class="sg-no-margin">h5. Fifth Level Heading</h5>
            <h6 class="sg-no-margin">h6. Sixth Level Heading</h6>
            <hr>
            <div>
	            <h1>h1. First Level Heading</h1>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	            <h2>h2. Second Level Heading</h2>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	            <h3>h3. Third Level Heading</h3>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	            <h4>h4. Fourth Level Heading</h4>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	            <h5>h5. Fifth Level Heading</h5>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
	            <h6>h6. Sixth Level Heading</h6>
	            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	            consequat.</p>
            </div>
        </div><!-- /.sg-section -->

        <!-- PARAGRAPHS -->
        <div class="sg-header" id="body">
        	<h5>Body Copy <a href="#body">#</a></h5>
    	</div>
        <div class="sg-section">
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div><!-- /.sg-section -->

        <!-- BLOCKQUOTES -->
        <div class="sg-header" id="blockquotes">
        	<h5>Blockquotes <a href="#blockquotes">#</a></h5>
    	</div>
        <div class="sg-section">
        	<blockquote>
                <p>What you get by achieving your goals is not as important as what you become by achieving your goals.</p>
                <footer>Henry David Thoreau</footer>
            </blockquote>
        </div><!-- /.sg-section -->

        <!-- LISTS -->
        <div class="sg-header" id="lists">
        	<h5>Lists <a href="#lists">#</a></h5>
    	</div>
    	<div class="sg-section">
    		<div class="row">
	    		<div class="col-6">
		        	<h2>Unordered List</h2>
		            <ul>
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit
		                    <ul>
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ul>
		                </li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ul>
	            </div>
	            <div class="col-6">
		            <h2>Ordered List</h2>
		            <ol>
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit
		                    <ol>
		                        <li>Phasellus iaculis neque</li>
		                        <li>Purus sodales ultricies</li>
		                        <li>Vestibulum laoreet porttitor sem</li>
		                        <li>Ac tristique libero volutpat at</li>
		                    </ol>
		                </li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ol>
	            </div>
            </div>
            <div class="row">
            	<div class="col-6">
		            <h2>Definition Lists</h2>
		    		<dl>
		                <dt>Lorem ipsum dolor sit amet</dt>
		                <dd>Consectetur adipiscing elit</dd>
		                <dt>Lorem ipsum dolor sit amet</dt>
		                <dd>Consectetur adipiscing elit</dd>
		                <dt>Lorem ipsum dolor sit amet</dt>
		                <dd>Consectetur adipiscing elit</dd>
		                <dt>Lorem ipsum dolor sit amet</dt>
		                <dd>Consectetur adipiscing elit</dd>
		            </dl>
		        </div>
	    		<div class="col-6">
		            <h2>Plain Unstyled Lists</h2>
		    		<ul class="list-unstyled">
		                <li>Lorem ipsum dolor sit amet</li>
		                <li>Consectetur adipiscing elit</li>
		                <li>Integer molestie lorem at massa</li>
		                <li>Facilisis in pretium nisl aliquet</li>
		                <li>Nulla volutpat aliquam velit</li>
		                <li>Faucibus porta lacus fringilla vel</li>
		                <li>Aenean sit amet erat nunc</li>
		                <li>Eget porttitor lorem</li>
		            </ul>
		        </div>
		    </div>
        </div><!-- /.sg-section -->

        <!-- BUTTONS -->
        <div class="sg-header" id="buttons">
        	<h5>Buttons <a href="#buttons">#</a></h5>
    	</div>
    	<div class="sg-section">
    		<p><a href="#" class="button">Button</a></p>
    		<p><a href="#" class="button btn-large">Large Button</a></p>
    		<p><input type="submit" class="button btn-link" value="Input as Link"></p>
    	</div>

    	<!-- FORM ELEMENTS -->
        <div class="sg-header" id="forms">
        	<h5>Form Elements <a href="#forms">#</a></h5>
    	</div>
    	<div class="sg-section">
    		<div class="row">
    			<label for="input1">Text Input:</label>
    			<input type="text" id="input1" placeholder="Placeholder text">
    		</div>
    		<div class="row">
    			<label for="textarea1">Text Area:</label>
    			<textarea id="textarea1" placeholder="Placeholder text"></textarea>
    		</div>
    		<div class="row">
    			<label for="select1">Select:</label>
    			<select id="select1">
                	<option value="one">Option one</option>
                	<option value="two">Option two</option>
                	<option value="three">Option three</option>
                </select>
            </div>
             <div class="row checkbox">
                <p class="label">Checkboxes:</p>
                <label for="cb1">
                    <input type="checkbox" name="cb1" id="cb1" value="1"> 
                    Option One
                </label>
                <label for="cb2">
                    <input type="checkbox" name="cb2" id="cb2" value="2"> 
                    Option Two
                </label>
                <label for="cb3">
                    <input type="checkbox" name="cb3" id="cb3" value="3"> 
                    Option Three
                </label>
            </div>
            <div class="row checkbox-inline">
                <p class="label">Inline Checkboxes:</p>
                <label for="cb4">
                    <input type="checkbox" name="cb4" id="cb4" value="4">
                    Option One
                </label>
                <label for="cb5">
                    <input type="checkbox" name="cb5" id="cb5" value="5">
                    Option Two
                </label>
                <label for="cb6">
                    <input type="checkbox" name="cb6" id="cb6" value="6">
                    Option Three
                </label>
            </div>
            <div class="row radio">
                <p class="label">Radio Buttons:</p>
                <label for="r1-1">
                    <input type="radio" name="r1" id="r1-1" value="1"> 
                    Option One
                </label>
                <label for="r1-2">
                    <input type="radio" name="r1" id="r1-2" value="2"> 
                    Option Two
                </label>
                <label for="r1-3">
                    <input type="radio" name="r1" id="r1-3" value="3"> 
                    Option Three
                </label>
            </div>
            <div class="row radio-inline">
                <p class="label">Inline Checkboxes:</p>
                <label for="r2-1">
                    <input type="radio" name="r2" id="r2-1" value="4">
                    Option One
                </label>
                <label for="r2-2">
                    <input type="radio" name="r2" id="r2-2" value="5">
                    Option Two
                </label>
                <label for="r2-3">
                    <input type="radio" name="r2" id="r2-3" value="6">
                    Option Three
                </label>
            </div>
            <div class="row">
                <label for="file1">File Upload:</label>
                <input type="file" name="file" id="file1">
            </div>
        </div><!-- /.sg-section -->

    	<!-- FORM ERROR STYLES -->
    	<!-- 

			These styles can be implemented by adding Parsley JS
			and then initializing with options like:

			$('.js-validate').parsley({
            	errorClass      : 'error',
            	errorsWrapper   : '<div class="error-list"></div>',
            	errorTemplate   : '<span class="error-msg"></span>'
        	}); 

        	http://parsleyjs.org/doc/download.html

    	-->
        <div class="sg-header" id="form-errors">
        	<h5>Form Error Styles <a href="#form-errors">#</a></h5>
    	</div>
    	<div class="sg-section">
            <form action="#" method="post" class="js-validate">
            <div class="row">
    			<label for="input2">Text Input:</label>
    			<input type="text" id="input2" placeholder="Placeholder text" class="error" data-parsley-required>
    			<div><span class="error-msg">This field is required</span></div>
    		</div>
    		<div class="row">
    			<label for="input2">Text Input:</label>
    			<input type="email" id="input2" placeholder="Placeholder text" class="error" data-parsley-required data-parsley-type="email">
    			<div><span class="error-msg">This field is required</span></div>
    		</div>
    		<div class="row">
    			<label for="textarea2">Text Area:</label>
    			<textarea id="textarea2" placeholder="Placeholder text" class="error" data-parsley-required></textarea>
    			<div><span class="error-msg">This field is required</span></div>
    		</div>
    		</form>
    	</div><!-- /.sg-section -->

	</div><!-- /.container -->
	
<?php require '_includes/site-footer.php'; ?>