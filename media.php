<!DOCTYPE html>
<!-- things in the code written in brackets led by an exclamation mark OR a forward slash with asterisks are code comments, and do not show up on the webpage, only in the code -->
<!-- there are some comments like this in the code to help you out! -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0">

  <!-- the code below links to my own image, but you can link it to an image to show as the icon of your website in web browsers -->
  <link rel="icon" type="image/png" href="../favicon.png">

  <!-- this links to and reads the stylesheet rules -->
  <link rel="stylesheet" href="style.css">

  <!-- this is the name of your website in your web browser -->
  <title>My Media Recs</title>
</head>

<body>
  <main>
    <div id="head">
      <h1>Media Recommendations</h1>
    </div>

    <div id="blurb">
      <!-- This is my preview text for this page, but you can delete it and replace it with your own introductions or explanations. It is all contained under this <div id="blurb"> tag, and closes right before the filters (see below.)-->
      <p>Welcome to my media recommendations! Use the filters below to find media that suits your interests.</p>

      <!-- I advise for you to keep these instructions (or write something similar) for using the filters.-->
      <p>You can choose if your selected filters are inclusive (<strong>Any</strong>) or exclusive (<strong>All</strong>).
        <br />Selecting multiple ratings will always filter inclusively because ratings are usually mutually exclusive.
      </p>
    </div>

    <div id="reset">
      <button type="button" id="resetFilters">Clear Filters</button>
    </div>

    <div class="filters">

      <!-- Mediums -->
      <fieldset>
        <legend>Medium</legend> <!-- this does not display -->

        <div class="filter-header">
          <span class="legend">Medium</span>
          <span class="filter-mode">
            <label><input type="radio" name="mediumMode" value="inclusive" checked> Any</label>
            <label><input type="radio" name="mediumMode" value="exclusive"> All</label>
          </span>
        </div>
        <div class="filter-options">
          <!-- 
          Replace or modify below with your recommendations' mediums. For best results, make the value="" match the text exactly.
          Make sure there is a space between the closing angle > and the text (see below).
          Label Template:
          <label><input type="checkbox" name="medium" value="Medium Name"> Medium Name</label>
        -->
          <label><input type="checkbox" name="medium" value="Animanga"> Anime/Manga</label>
          <label><input type="checkbox" name="medium" value="Book"> Books</label>
          <label><input type="checkbox" name="medium" value="Comics"> Comics</label>
          <label><input type="checkbox" name="medium" value="Movie"> Movies</label>
          <label><input type="checkbox" name="medium" value="TV"> TV Shows</label>
          <label><input type="checkbox" name="medium" value="Video Games"> Video Games</label>
        </div>
      </fieldset>

      <!-- Tropes & Genres -->
      <fieldset>
        <legend>Tropes & Genres</legend> <!-- this does not display -->

        <div class="filter-header">
          <span class="legend">Tropes & Genres</span>
          <span class="filter-mode">
            <label><input type="radio" name="tropeMode" value="inclusive" checked> Any</label>
            <label><input type="radio" name="tropeMode" value="exclusive"> All</label>
          </span>
        </div>
        <div class="filter-options">
          <!-- 
          Replace below with your own recommendation tropes/genres. For best results, make the value="" match the text exactly.
            Make sure there is a space between the closing angle > and the text (see below).
            Label Template:
            <label><input type="checkbox" name="trope" value="Trope Name"> Trope Name</label>
          -->
          <label><input type="checkbox" name="trope" value="BL"> BL / Yaoi</label>
          <label><input type="checkbox" name="trope" value="GL"> GL / Yuri</label>
          <label><input type="checkbox" name="trope" value="Romance"> Romance</label>
          <label><input type="checkbox" name="trope" value="Enemies to Friends/Lovers"> Enemies to Friends/Lovers</label>
          <label><input type="checkbox" name="trope" value="Reluctant Partners"> Reluctant Partners</label>
          <label><input type="checkbox" name="trope" value="Sports"> Sports</label>
          <label><input type="checkbox" name="trope" value="Found Family"> Found Family</label>
          <label><input type="checkbox" name="trope" value="Danmei"> Danmei</label>
          <label><input type="checkbox" name="trope" value="Mystery"> Mystery</label>
          <label><input type="checkbox" name="trope" value="Drama"> Drama</label>
          <label><input type="checkbox" name="trope" value="Timeskip"> Timeskip</label>
        </div>
      </fieldset>

      <!-- Ratings -->
      <fieldset>
        <legend>Rating</legend>
        <div class="filter-header">
          <span class="legend">Rating</span>
          <!-- 
          This is the any/all code if you would like to have it displayed. 
          It currently does not display by default (commented out here) because works usually do not have more than one rating.
          <div class="filter-mode">
              <label><input type="radio" name="ratingMode" value="inclusive" checked> Any</label>
              <label><input type="radio" name="ratingMode" value="exclusive"> All</label>
            </div> -->
        </div>
        <div class="filter-options">
          <label><input type="checkbox" name="rating" value="G"> G</label>
          <label><input type="checkbox" name="rating" value="PG"> PG</label>
          <label><input type="checkbox" name="rating" value="PG-13"> PG-13</label>
          <label><input type="checkbox" name="rating" value="R"> R</label>
          <label><input type="checkbox" name="rating" value="NC-17"> NC-17</label>
        </div>
      </fieldset>

    </div> <!-- end filters -->

    <div id="results">
      <!-- rec cards will display here -->
    </div>

    <!-- footer start -->
    <div id="footer">
      <p>
        &copy; 2026 your username <br /><a href="">Bsky</a> | <a href="">Tumblr</a> | <a href="">Ko-fi</a> | Socials
        et al
        <br />Or do whatever you want with the footer
      </p>

      <p>
        Template base by <a href="https://fan.kingdra.net/">kingdra.net</a> &hearts;
      </p>
      <!-- I'd appreciate it if you kept the credits here so other people can find it instead of stealing your code. But you don't have to, I can't tell you what to do -->
    </div>
    <!-- end footer -->
  </main>

  <script>
    const items = [

      /** BEGINNING OF RECS
      
      Rec Card Template: 

      {
        title: "Title",
        mediums: ["Medium"],
        tropes: ["Trope 1", "Trope 2"],
        ratings: ["Rating"],
        warnings: "",
        summary: "<p>Summary here. If your summary contains double quotes, place a backslash \ before it.</p>",
        thoughts: "Put your thoughts about your rec here. If you don't want to provide thoughts, you can delete this field or leave it empty. "
      },

      Do not forget commas after each field.
      Do not forget brackets [] before the double quotes " for the filtered fields:
        mediums
        tropes
        ratings
      Filtered fields (mediums, tropes, ratings) must be listed in the EXACT way they are displayed in the input values above.
      Any field with double quotes "" but NO brackets [] can be written in any format and support basic HTML.
      If there are no warnings, leave the warnings field as an empty string "", and None will automatically display on the frontend.
      
      <p> is optional in summary but is recommended for best space formatting. Additional paragraphs can be added using multiple <p> tags. See below for examples.
      Conversely, <p> is NOT recommended in thoughts for best space formatting.
      You can use <spoiler></spoiler> to black out text in any field. Warnings are not shown by default (must be clicked on).
      
      **/

      /** Below are my recs. Delete them and replace with your own. (You can delete this line as well) **/
      {
        title: "Bad Buddy",
        mediums: ["TV"],
        tropes: ["BL", "Enemies to Friends/Lovers", "Reluctant Partners", "Romance"],
        ratings: ["PG-13"],
        warnings: "",
        summary: "<p>The rivalry of Pat, a cheeky and impulsive guy, and Pran, a neat and tidy perfectionist, has been passed down from a previous generation. They are destined to be enemies to each other even before they were born. Their family runs a hardware business side by side, and their parents hate one another to the core. For this reason, both of them have become rivals in any kind of competition.</p> <p>Or, Romeo and Juliet but make it a Thai BL with exceptionally skilled actors and a whole lot of campy fun.</p>",
        thoughts: "My favorite piece of media of all time. If you need a way to watch it, please let me know."
      },
      {
        title: "Haikyuu!!",
        mediums: ["Animanga"],
        tropes: ["Sports", "Found Family", "Reluctant Partners"],
        ratings: ["PG"],
        warnings: "",
        summary: "<p>Shōyō Hinata, after seeing a volleyball match, aims to become the next \"Little Giant\" and thus joins his middle school volleyball club. After finding new members, he sets out for the middle school tournament, where he crosses paths with a formidable school with the \"King of the Court,\" Tobio Kageyama. Although his team lost, Hinata is still determined to aim for the top and exact revenge on Kageyama. Upon entering high school, he receives the biggest surprise: He and Kageyama are in the same high school volleyball club! </p>",
        thoughts: "Probably my favorite anime of all time. What can I say, I love sports, enemies to friends, and found families."
      },
      {
        title: "MDZS / CQL",
        mediums: ["Book", "TV"],
        tropes: ["BL", "Danmei", "Mystery", "Drama", "Romance"],
        ratings: ["R", "NC-17"],
        warnings: ["Trypophobia (episode 31 & 48), character death, parental abuse, violence/gore, <spoiler>implied incest</spoiler>"],
        summary: "<p>As the grandmaster who founded the Demonic Path, Wei Wuxian becomes hated by millions throughout the cultivation world until his death. He reincarnates into the body of a lunatic who was abandoned by his clan and is later, unwillingly, taken away by a famous cultivator—Lan Wangji, an old school enemy. However, through the tangled mysteries of their clans, Wei Wuxian slowly realizes that Lan Wangji holds more feelings than he lets on.</p>",
        thoughts: "I consider the book and the Netflix series different ways of telling a similar story, but ultimately both center around Wei Wuxian and Lan Wangji's relationship, which I absolutely adore."
      },
      {
        title: "The Social Network",
        mediums: ["Movie"],
        tropes: ["Drama", "Timeskip"],
        ratings: ["PG-13"],
        warnings: "",
        summary: "<p>In 2003, Harvard undergrad and computer genius Mark Zuckerberg begins work on a new concept that eventually turns into the global social network known as Facebook. Six years later, he is one of the youngest billionaires ever, but Zuckerberg finds that his unprecedented success leads to both personal and legal complications when he ends up on the receiving end of two lawsuits, one involving his former friend.</p>",
        thoughts: "My favorite movie of all time. Basically RPF in a homoerotic kind of way. Aaron Sorkin's dialogue is impeccable and fits right in with this film and these characters."
      },
      {
        title: "Heated Rivalry",
        mediums: ["TV"],
        tropes: ["BL", "Sports", "Enemies to Friends/Lovers", "Timeskip", "Reluctant Partners", "Romance"],
        ratings: ["PG-13"],
        warnings: ["I have no idea"],
        summary: "<p>Gay hockey boys I think?</p>",
        thoughts: "I actually haven't watched this show yet. But I did see Dan and Phil's reaction to the first episode and enjoyed it."
      },
      {
        title: "The Westing Game by Ellen Raskin",
        mediums: ["Book"],
        tropes: ["Mystery"],
        ratings: ["G"],
        warnings: "",
        summary: "<p>An award-winning mystery novel where 16 heirs to Sam Westing's fortune must solve a puzzle to win $200 million and ownership of his business. The story centers around the residents of Sunset Towers apartment building who are paired together to decipher clues in Westing's will.</p>",
        thoughts: "I read this when I was 10 and it's still one of my favorite books of all time."
      },
      {
        title: "X-Men: First Class",
        mediums: ["Movie"],
        tropes: ["Enemies to Friends/Lovers", "Found Family", "Reluctant Partners"],
        ratings: ["PG-13"],
        warnings: ["Violence, character death"],
        summary: "<p>In the 1960s, superpowered humans Charles Xavier and Erik Lensherr work together to find others like them, but Erik's vengeful pursuit of an ambitious mutant who ruined his life causes a schism to divide them.</p>",
        thoughts: "THE X-Men Movie of all time. In my opinion."
      },
      {
        title: "Death Note",
        mediums: ["Animanga"],
        tropes: ["Enemies to Friends/Lovers", "Mystery", "Drama"],
        ratings: ["PG-13"],
        warnings: ["Violence, character death"],
        summary: "<p>High school student Light Yagami discovers a supernatural notebook that allows him to kill anyone by writing the victim's name while picturing their face. The story follows his attempts to become a god by creating a New World cleansed of evil by using the notebook, and the complex conflict between himself and all those who try to stop or help him.</p>",
        thoughts: "The first anime/manga I ever finished. Fun and fascinating storytelling with characters I love to hate and hate to love."
      },
      {
        title: "Psych",
        mediums: ["TV"],
        tropes: ["Mystery", "Drama", "Reluctant Partners"],
        ratings: ["PG-13"],
        warnings: ["Occasional violence, death, and gore"],
        summary: "<p>A man with the ability to look at the world with extreme detail uses his abilities to start a private psychic detective agency after lying to the Police Department. Shawn Spencer and his best friend Barton 'Gus' Guster work together to solve crimes while keeping this secret from the police.</p>",
        thoughts: "My favorite Sherlock Holmes adaptation."
      },
      {
        title: "Lost",
        mediums: ["TV"],
        tropes: ["Mystery", "Drama", "Found Family", "Timeskip", "Romance"],
        ratings: ["PG-13"],
        summary: "<p>The survivors of a plane crash are forced to work together in order to survive on a seemingly deserted tropical island.</p>",
        warnings: ["Violence, gore in the pilot, character death, abuse, bad parenting"],
        thoughts: "One of my favorite stories of all time. It's best to go into it blind with no expectations at all, and keep an open mind."
      }

      /** END OF RECS **/

    ];

    const resultsEl = document.getElementById("results");

    const filters = {
      medium: new Set(),
      trope: new Set(),
      rating: new Set(),
      modes: {
        medium: "inclusive",
        trope: "inclusive",
        rating: "inclusive"
      }
    };

    const resetBtn = document.getElementById("resetFilters");

    resetBtn.addEventListener("click", () => {
      // 1. Clear JS filter state
      filters.medium.clear();
      filters.trope.clear();
      filters.rating.clear();

      filters.modes.medium = "inclusive";
      filters.modes.trope = "inclusive";
      filters.modes.rating = "inclusive";

      // 2. Reset all checkboxes
      document.querySelectorAll("input[type='checkbox']").forEach(cb => {
        cb.checked = false;
      });

      // 3. Reset radio buttons to default (Any)
      document.querySelectorAll("input[type='radio'][value='inclusive']").forEach(radio => {
        radio.checked = true;
      });

      // 4. Re-render everything
      applyFilters();
    });

    document.addEventListener("change", (e) => {
      const target = e.target;

      // Tag checkboxes
      if (target.matches("input[type='checkbox']")) {
        const { name, value, checked } = target;
        checked ? filters[name].add(value) : filters[name].delete(value);
        applyFilters();
      }

      // Mode radios
      if (target.matches("input[type='radio']")) {
        const category = target.name.replace("Mode", "");
        filters.modes[category] = target.value;
        applyFilters();
      }
    });

    function applyFilters() {
      const filteredItems = items.filter(item =>
        matchesFilter(filters.medium, item.mediums, filters.modes.medium) &&
        matchesFilter(filters.trope, item.tropes, filters.modes.trope) &&
        matchesFilter(filters.rating, item.ratings, filters.modes.rating)
      );

      renderResults(filteredItems);
    }

    function matchesFilter(activeSet, itemValues, mode) {
      if (activeSet.size === 0) return true;

      if (mode === "inclusive") {
        // OR logic
        return itemValues.some(v => activeSet.has(v));
      }

      if (mode === "exclusive") {
        // AND logic
        return [...activeSet].every(v => itemValues.includes(v));
      }

      return true;
    }

    function renderResults(list) {
      resultsEl.innerHTML = "";

      if (list.length === 0) {
        resultsEl.innerHTML = `<div class="empty">No matching recommendations.</div>`;
        return;
      }

      list.forEach(item => {
        const card = document.createElement("div");
        card.className = "card";

        card.innerHTML = `
          <h2>${item.title}</h2>
          <div class="meta"><strong>Medium:</strong> ${item.mediums.join(", ")}
          <br /><strong>Tropes:</strong> ${item.tropes.join(", ")}
          <br /><strong>Rating:</strong> ${item.ratings.join(", ")}
          <br /><details><summary>Warnings</summary> ${item.warnings || "None"}</details></div>

          <div class="summary">${item.summary}</div>
          <div class="thoughts"><strong>My thoughts:</strong> ${item.thoughts}</div>
        `;

        resultsEl.appendChild(card);
      });
    }

    applyFilters();
  </script>
</body>

</html>
