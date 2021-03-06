<x-header />

        <div class="container searchbardiv" id="formsearch">
            <form role="search" method="get" id="searchform">
                <div class="input-group">
                    <input type="text" id="searchbox" class="form-control" name="s">
                    <div class="input-group-btn">
                        <button class="btn btn-search" id="searchsubmit" type="submit">
                            <strong>Search</strong>
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- end searchbardiv -->

        <div class="head-title">
            <div class="container">
                <h2 class="page-title">Submit Your Recipe</h2>
            </div><!-- end container -->
        </div><!-- end head-title -->

        <div id="main">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="submit-recipe col-md-8">
                        <header>
                            <h3>Welcome back, Recipe Contributor!</h3>
                            <p>This is the text your users will see when you're logged in. You can of course change it
                                to whatever you'd like using the Settings panel. It includes an optional token to
                                display the logged in user's display name wherever you need to.</p>
                        </header>
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6 form-group"><label for="InputRecipeTitle">Recipe
                                        Title</label><input type="text" class="form-control" id="InputRecipeTitle"
                                        aria-describedby="titleHelp" placeholder="ex. Traditional Fried Rice"><small
                                        id="titleHelp" class="form-text text-muted">Keep it short and
                                        descriptive</small></div>
                                <div class="col-12 col-md-6 form-group"><label for="recipeImage">Recipe
                                        Photo</label><input type="file" class="form-control-file" id="recipeImage"
                                        aria-describedby="sizeHelp"><small id="sizeHelp"
                                        class="form-text text-muted">Recommended size:1440px by 800px or larger</small>
                                </div>
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col form-group"><label for="InputVideoTitle">Recipe Video</label><input
                                        type="text" class="form-control" id="InputVideoTitle"
                                        aria-describedby="videoHelp"
                                        placeholder="ex. http://youtu.be/1O8D_wTCm3s"><small id="videoHelp"
                                        class="form-text text-muted">OPTIONAL:If you have your recipe video on
                                        Youtube,Vimeo,or any of the other supported Embed sites,then you'll want to use
                                        the field above. Just paste in the URL (ex. http://youtu.be/1O8D_wTCm3s or
                                        https://vimeo.com/26140401) and it will show up as a popup by clicking the
                                        recipe image.</small>
                                </div>
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col form-group">
                                    <label for="levelFormControlSelect">Difficulty Level</label>
                                    <select class="form-control" id="levelFormControlSelect">
                                        <option selected>Beginner</option>
                                        <option value="1">Intermediate</option>
                                        <option value="2">Master</option>
                                        <option value="3">Professional</option>
                                    </select>
                                </div>
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-12 col-md-4 form-group">
                                    <label for="recipeCatFormControlSelect">Recipe Category</label>
                                    <select class="form-control" id="recipeCatFormControlSelect">
                                        <option selected>Choose category</option>
                                        <option value="1">Asian</option>
                                        <option value="2">Breakfast</option>
                                        <option value="3">Party</option>
                                    </select>
                                </div><!-- end col -->
                                <div class="col-12 col-md-4 form-group">
                                    <label for="methodFormControlSelect">Cooking Method</label>
                                    <select class="form-control" id="methodFormControlSelect">
                                        <option selected>Choose a cooking method</option>
                                        <option value="1">Steam</option>
                                        <option value="2">Fry</option>
                                        <option value="3">Bake</option>
                                    </select>
                                </div><!-- end col -->
                                <div class="col-12 col-md-4 form-group">
                                    <label for="cuisineFormControlSelect">Cuisine</label>
                                    <select class="form-control" id="cuisineFormControlSelect">
                                        <option selected>Choose a cuisine</option>
                                        <option value="1">African Cuisine</option>
                                        <option value="2">Asian Cuisine</option>
                                        <option value="3">European Cuisine</option>
                                    </select>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col form-group">
                                    <label for="descTextarea">Short Description</label>
                                    <textarea class="form-control" id="descTextarea" rows="6"></textarea>
                                </div><!-- end form-group -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-12 col-md-6 form-group">
                                    <label for="timeRange1">Prep Time</label>
                                    <input type="range" value="1" class="custom-range" min="0" max="5" step="0.5"
                                        id="timeRange1">
                                </div>

                                <div class="col-12 col-md-6 form-group">
                                    <label for="timeRange2">Cook Time</label>
                                    <input type="range" value="0.5" class="custom-range" min="0" max="5" step="0.5"
                                        id="timeRange2">
                                </div>
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="ingredientTextarea">Ingredients</label>
                                    <textarea class="form-control" id="ingredientTextarea"
                                        aria-describedby="ingredientHelp" rows="6"></textarea>
                                    <small id="ingredientHelp" class="form-text text-muted">Enter one ingredient per
                                        line. Use a double dash to start new section titles. (ex. --Section Title).
                                        Separate the ingredient amount from the ingredient name with double space if you
                                        want to follow Google's rich snippets formatting.</small></div>
                                <!-- end form-group -->
                                <div class="col-12 form-group"><label for="directionTextarea">Direction</label><textarea
                                        class="form-control" id="directionTextarea" aria-describedby="directionHelp"
                                        rows="6"></textarea><small id="directionHelp" class="form-text text-muted">Add
                                        all of the cooking steps,one per line. You can use a double dash for section
                                        titles(ex. --Section Title). You can also use the [timer length=30]30
                                        Minutes[/timer] shortcode to add a timer link.</small></div>
                                <!-- end form-group -->
                                <div class="col-12 form-group"><label for="notesTextarea">Additional
                                        Notes</label><textarea class="form-control" id="notesTextarea"
                                        aria-describedby="notesHelp" rows="6"></textarea><small id="notesHelp"
                                        class="form-text text-muted">Add any other notes like recipe source,cooking
                                        hints,etc. This section will show up under the cooking directions.</small></div>
                                <!-- end form-group -->
                                <div class="col-12 form-group"><label for="InputYieldTitle">Yield</label><input
                                        type="text" class="form-control" id="InputYieldTitle"
                                        aria-describedby="yieldHelp"><small id="yieldHelp"
                                        class="form-text text-muted">ex. 4 Servings,3 Cups,6 Bowls,etc.</small></div>
                                <!-- end form-group -->
                            </div><!-- end row -->
                        </form>
                        <div class="row">
                            <div class="col nutrition-box">
                                <div class="inner">
                                    <h3>Nutrition Facts</h3>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-6 col-md-4"><label for="inputNutrition1">Serving
                                                    Size</label><input type="text" class="form-control"
                                                    id="inputNutrition1"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition2">Calories</label><input type="text"
                                                    class="form-control" id="inputNutrition2"></div>
                                            <div class="form-group col-6 col-md-4"><label for="inputNutrition3">Total
                                                    Fat</label><input type="text" class="form-control"
                                                    id="inputNutrition3"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition4">Saturated Fat</label><input type="text"
                                                    class="form-control" id="inputNutrition4"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition5">Polyunsaturated Fat</label><input type="text"
                                                    class="form-control" id="inputNutrition5"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition6">Monounsaturated Fat</label><input type="text"
                                                    class="form-control" id="inputNutrition6"></div>
                                            <div class="form-group col-6 col-md-4"><label for="inputNutrition7">Trans
                                                    Fat</label><input type="text" class="form-control"
                                                    id="inputNutrition7"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition8">Cholesterol</label><input type="text"
                                                    class="form-control" id="inputNutrition8"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition9">Sodium</label><input type="text"
                                                    class="form-control" id="inputNutrition9"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition10">Potassium</label><input type="text"
                                                    class="form-control" id="inputNutrition10"></div>
                                            <div class="form-group col-6 col-md-4"><label for="inputNutrition11">Total
                                                    Carbohydrate</label><input type="text" class="form-control"
                                                    id="inputNutrition11"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition12">Fiber</label><input type="text"
                                                    class="form-control" id="inputNutrition12"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition13">Sugar</label><input type="text"
                                                    class="form-control" id="inputNutrition13"></div>
                                            <div class="form-group col-6 col-md-4"><label
                                                    for="inputNutrition14">Protein</label><input type="text"
                                                    class="form-control" id="inputNutrition14"></div>
                                        </div><!-- end form-row -->
                                    </form>
                                </div><!-- end inner -->
                            </div><!-- end nutrition box -->
                        </div><!-- end row --><button type="submit" class="btn btn-primary">Submit Recipe</button>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end main -->
        
        <x-footer />

