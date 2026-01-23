<!DOCTYPE html>
<!-- things in the code written in brackets led by an exclamation mark OR a forward slash with asterisks are code comments, and do not show up on the webpage, only in the code -->
<!-- there are some comments like this in the code to help you out! -->
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="initial-scale=1.0" />

  <!-- the code below links to my own image, but you can link it to an image to show as the icon of your website in web browsers -->
  <link rel="icon" type="image/png" href="../favicon.png" />

  <!-- this links to and reads the stylesheet rules -->
  <link rel="stylesheet" href="style.css" />
  
  <!-- this is the name of your website in your web browser -->
  <title>My Fanfiction Recs</title>
</head>

<body>
  <main>
    <div id="head"> 
      <h1>Fanfiction Recommendations</h1>
    </div>

    <div id="blurb">
      <!-- This is my preview text for this page, but you can delete it and replace it with your own introductions or explanations. It is all contained under this <div id="blurb"> tag, and closes right before the filters (see below.)-->  
      <p>Welcome to my fanfiction recommendations! Use the filters below to find fic that suits your interests.</p>

      <!-- I advise for you to keep these instructions (or write something similar) for using the filters.-->
      <p>You can choose if your selected filters are inclusive (<strong>Any</strong>) or exclusive (<strong>All</strong>). 
      <br />Selecting multiple ratings will always filter inclusively because ratings are usually mutually exclusive.</p>
    </div>

    <div id="reset">
      <button type="button" id="resetFilters">Clear Filters</button>
    </div>

    <div class="filters">
      <!-- Fandoms -->
      <fieldset>
        <legend>Fandom</legend>  <!-- this does not display -->

        <div class="filter-header">
          <span class="legend">Fandom</span>
          <span class="filter-mode">
            <label><input type="radio" name="fandomMode" value="inclusive" checked> Any</label>
            <label><input type="radio" name="fandomMode" value="exclusive"> All</label>
          </span>
        </div>
        <div class="filter-options">
          <!-- 
            Replace below with your own rec fandoms. For best results, make the value="" match the text exactly.
            Make sure there is a space between the closing angle > and the text (see below).
            Label Template:
            <label><input type="checkbox" name="fandom" value="Fandom Name"> Fandom Name</label>
          -->
          <label><input type="checkbox" name="fandom" value="Avatar: The Last Airbender"> Avatar: The Last Airbender</label>
          <label><input type="checkbox" name="fandom" value="Bad Buddy"> Bad Buddy</label>
          <label><input type="checkbox" name="fandom" value="Haikyuu!!"> Haikyuu!!</label>
          <label><input type="checkbox" name="fandom" value="One Direction"> One Direction</label>
          <label><input type="checkbox" name="fandom" value="South Park"> South Park</label>
          <label><input type="checkbox" name="fandom" value="The Social Network"> The Social Network</label>
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
            Replace below with your own rec tropes/genres. For best results, make the value="" match the text exactly.
            Make sure there is a space between the closing angle > and the text (see below).
            Label Template:
            <label><input type="checkbox" name="trope" value="Trope Name"> Trope Name</label>
          -->
          <label><input type="checkbox" name="trope" value="Canon Compliant"> Canon Compliant</label>
          <label><input type="checkbox" name="trope" value="Canon Divergent"> Canon Divergent</label>
          <label><input type="checkbox" name="trope" value="Cheating"> Cheating</label>
          <label><input type="checkbox" name="trope" value="College/University"> College/University</label>
          <label><input type="checkbox" name="trope" value="Crack"> Crack</label>
          <label><input type="checkbox" name="trope" value="Disability Themes"> Disability Themes</label>
          <label><input type="checkbox" name="trope" value="Fix-It"> Fix-It</label>
          <label><input type="checkbox" name="trope" value="Flower Shop AU"> Flower Shop AU</label>
          <label><input type="checkbox" name="trope" value="Fluff"> Fluff</label>
          <label><input type="checkbox" name="trope" value="Genderbend"> Genderbend</label>
          <label><input type="checkbox" name="trope" value="High School"> High School</label>
          <label><input type="checkbox" name="trope" value="LGBT Themes"> LGBT Themes</label>
          <label><input type="checkbox" name="trope" value="Mafia/Crime AU"> Mafia/Crime AU</label>
          <label><input type="checkbox" name="trope" value="Pining"> Pining</label>
          <label><input type="checkbox" name="trope" value="Road Trip"> Road Trip</label>
          <label><input type="checkbox" name="trope" value="Superpowers"> Superpowers</label>
          <label><input type="checkbox" name="trope" value="Time Travel"> Time Travel</label>
        </div>
      </fieldset>

      <!-- Ratings -->
      <fieldset>
        <legend>Ratings</legend> <!-- this does not display -->
        
        <div class="filter-header">
          <span class="legend">Ratings</span>
          <!-- 
          This is the any/all code if you would like to have it displayed. 
          It currently does not display by default (commented out here) because works usually do not have more than one rating.
          <span class="filter-mode">
            <label><input type="radio" name="ratingMode" value="inclusive" checked> Any</label>
            <label><input type="radio" name="ratingMode" value="exclusive"> All</label>
          </span> -->
        </div>
        <div class="filter-options">
          <label><input type="checkbox" name="rating" value="General"> General</label>
          <label><input type="checkbox" name="rating" value="Teen"> Teen</label>
          <label><input type="checkbox" name="rating" value="Mature"> Mature</label>
          <label><input type="checkbox" name="rating" value="Explicit"> Explicit</label>
        </div>
      </fieldset>
    </div> <!-- end filters -->

    <div id="results">
      <!-- rec cards will display here -->
    </div>

    <!-- footer start -->
    <div id="footer">
      <p>
        &copy; 2026 your username <br /><a href="">Bsky</a> | <a href="">Tumblr</a> | <a href="">Ko-fi</a> | Socials et al 
        <br />Or do whatever you want with the footer
      </p>

      <p>
        Template base by <a href="https://fan.kingdra.net/">kingdra.net</a> &hearts;
      </p>
      <!-- I'd appreciate it if you kept the credits here so other people can find it instead of stealing your code. But you don't have to, I can't tell you what to do -->
    </div>
    <!-- end footer -->
  </main>

  <script type="text/javascript">
    const items = [
      /** BEGINNING OF RECS
      
      Rec Card Template: 

      {
        title: "Work Title",
        link: "https://work.link",
        author: "Author",
        wordCount: "Word count, any format",
        fandoms: ["Fandom Name"],
        ships: "Ship, any format",
        tropes: ["Trope 1", "Trope 2"],
        ratings: ["Rating"],
        warnings: "",
        summary: "<p>Summary here. If your summary contains double quotes, place a backslash \ before it.</p>",
        thoughts: "Put your thoughts about your rec here. If you don't want to provide thoughts, you can delete this field or leave it empty. "
      },

      Do not forget commas after each field.
      Do not forget brackets [] before the double quotes " for the filtered fields:
        fandoms
        tropes
        ratings
      Filtered fields (fandoms, tropes, ratings) must be listed in the EXACT way they are displayed in the checkboxes above.
      Any field with double quotes "" but NO brackets [] can be written in any format and support basic HTML.
      Except for the link field, which should always be a valid URL.
      If there are no warnings, leave the warnings field as an empty string "", and None will automatically display on the frontend.
      
      <p> is optional in summary but is recommended for best space formatting. Additional paragraphs can be added using multiple <p> tags. See below for examples.
      Conversely, <p> is NOT recommended in thoughts for best space formatting.
      You can use <spoiler></spoiler> to black out text in any field. Warnings are not shown by default (must be clicked on).

      List separate tropes with commas inside the brackets, e.g. ["Trope 1", "Trope 2"],
      For crossovers, the fandom format should be
        fandoms: ["Fandom Name 1", "Fandom Name 2"],
      
      **/

      /** Below are my recs. Delete them and replace with your own. (You can delete this line as well) **/

      {
        title: "Control and Other Illusions",
        link: "https://terajk.dreamwidth.org/22042.html",
        author: "terajk",
        wordCount: "2k",
        fandoms: ["Avatar: The Last Airbender"],
        ships: "Azula/Ty Lee",
        tropes: ["LGBT Themes", "Disability Themes"],
        ratings: ["Teen"],
        warnings: "",
        summary: "<p>Prompt details: \"Azula doesn't like the mind-healers, but trying to 'fix' her attraction to women is going much too far.\"</p>",
      },
      {
        title: "steeped in burning flowers",
        link: "https://archiveofourown.org/works/2566970",
        author: "pennyworld",
        wordCount: "11k",
        fandoms: ["Haikyuu!!"],
        ships: "Kageyama/Hinata",
        tropes: ["Flower Shop AU", "Fluff"],
        ratings: ["General"],
        warnings: "",
        summary: "<p>Shouyou definitely isn't stripping petals off flowers to figure out whether Kageyama likes him.</p><p>That would mean leaving it to chance.</p>",
        thoughts: "",
      },
      {
        title: "Don't Worry",
        link: "https://archiveofourown.org/works/46238947",
        author: "bbs_hyperfixation",
        wordCount: "18k",
        fandoms: ["Bad Buddy"],
        ships: "Pat/Pran",
        tropes: ["Cheating", "Canon Divergent"],
        ratings: ["Explicit"],
        warnings: "",
        summary: "<p>Pat is on his way to his 5 year high school reunion. He hasn't seen Pran since that fateful day at the Christmas concert. He's hoping he'll come to the reunion, but how will he feel when Pran gets there, looking older and more confident than he ever did in high school? Can he get to know this new Pran?</p>",
        thoughts: "Super fun and sexy and memorable <3"
      },
      {
        title: "Come On, Come On (the world will follow after)",
        link: "https://archiveofourown.org/works/46979710",
        author: "Everybodyknows",
        wordCount: "7k",
        fandoms: ["Bad Buddy"],
        ships: "Pat/Pran",
        tropes: ["High School"],
        ratings: ["General"],
        warnings: "",
        summary: "<p>Pat and Pran are high school besties. After an incident, Pat thinks they are dating. Pran thinks he is going to die of unrequited love. They are both complete idiots.</p>",
        thoughts: "I love how Patpran's stupidity is on full display in this fic."
      },
      {
        title: "Have Your Cake and Eat It, Too",
        link: "https://archiveofourown.org/works/44548063",
        author: "aworkingprinter",
        wordCount: "3k",
        fandoms: ["Bad Buddy"],
        ships: "Pat/Pran",
        tropes: ["Canon Compliant"],
        ratings: ["Teen"],
        warnings: "",
        summary: "<p>Pat was the one who found out about Pran going to Singapore first.</p>",
        thoughts: "This is basically canon to ME."
      },
      {
        title: "Complication With Optimistic Outcome",
        link: "https://archiveofourown.org/works/2362892/chapters/5216483",
        author: "yagyuzue (SwordsMagician)",
        wordCount: "31k",
        fandoms: ["The Social Network"],
        ships: "Mark/Eduardo (pre-slash)",
        tropes: ["Time Travel", "Fix-It"],
        ratings: ["Teen"],
        warnings: "",
        summary: "<p>People can't quite put their finger on what it is about Mark Zuckerberg. (Or, you don't get to rewrite the past without making a few ripples.)</p>",
        thoughts: "Fascinating and one of my favorite TSN fics of all time. I adore the OCs so much."
      },
      {
        title: "Boy Falls From the Sky",
        link: "https://archiveofourown.org/works/249196",
        author: "lc2l",
        wordCount: "32k",
        fandoms: ["The Social Network"],
        ships: "Mark/Eduardo",
        tropes: ["Canon Divergent", "Superpowers"],
        ratings: ["Teen"],
        warnings: "",
        summary: "<p>In which Divya Narendra is an evil mastermind, Sean Parker seems like a supervillain and Eduardo can't go to Palo Alto because he's too busy in New York being Spiderman.</p>",
        thoughts: "The fic that got me hyperfixated on The Social Network 4 whole years after I watched the movie."
      },
      {
        title: "The Twelve Labors of Sean Parker",
        link: "https://archiveofourown.org/works/338739",
        author: "antistar_e (kaikamahine)",
        wordCount: "31k",
        fandoms: ["The Social Network"],
        ships: "Mark/Eduardo",
        tropes: ["Superpowers", "Mafia/Crime AU"],
        ratings: ["Mature"],
        warnings: "",
        summary: "<p>Meet Sean Parker. He's 24 years old, he hates most condescending authority figures as much as they hate him, and he's just joined a crime syndicate called the Harvard Connection. This is going to go well. [AU].</p>",
        thoughts: "A legitimate all-timer."
      },
      {
        title: "Coincidence",
        link: "https://archiveofourown.org/works/2795069",
        author: "renaissance",
        wordCount: "10k",
        fandoms: ["Haikyuu!!"],
        ships: "Kageyama/Hinata",
        tropes: ["High School"],
        ratings: ["Teen"],
        warnings: "",
        summary: "<p><strong>coincidence</strong> • n. <strong>1</strong> a remarkable concurrence of events or circumstances without apparent causal connection. <strong>2</strong> correspondence in nature or in time of occurrence.</p>",
        thoughts: "The Oisuga fic of all time and I am not biased at all."
      },
      {
        title: "this is no bridget jones",
        link: "https://archiveofourown.org/works/583739/chapters/1048523",
        author: "nicheinhischest",
        wordCount: "54k",
        fandoms: ["One Direction"],
        ships: "Zayn/Niall",
        tropes: ["Pining", "College/University"],
        ratings: ["Teen"],
        warnings: "",
        summary: "<p>\"Harry,\" Zayn feels like he's losing it, \"Harry, you know my life isn't a romantic comedy, right? No matter how much you try and make it one.\"</p> <p>\"Please, I've seen Love, Actually like... thirty times,\" Harry says, grinning. \"This is going to be so much better.\"</p>",
        thoughts: "Iconic."
      },
      {
        title: "The Scenic Route",
        link: "https://archiveofourown.org/works/465965/chapters/804802",
        author: "hollycomb",
        wordCount: "116k",
        fandoms: ["South Park"],
        ships: "Stan/Kyle, Butters/Kenny",
        tropes: ["Road Trip"],
        ratings: ["Explicit"],
        warnings: "",
        summary: "<p>The boys embark on a six day road trip to California before separating for college. Cartman is a pain in the ass, Kenny has no future, Butters is in crisis, and Kyle doesn't know how he'll say goodbye to Stan.</p>",
        thoughts: "One of my favorite and most indulgent fics of all time."
      },
      {
        title: "Lost in the Thrill of It All",
        link: "https://archiveofourown.org/works/563558",
        author: "wasp",
        wordCount: "29k",
        fandoms: ["One Direction"],
        ships: "Zayn/Niall, Liam/Louis, Harry/Caroline",
        tropes: ["Genderbend"],
        ratings: ["Mature"],
        warnings: "",
        summary: "<p>She's in her uniform, the collar buttoned up to her throat, her sleeves bare. The colours of her tattoos contrast starkly with the blue of her material and Niall wants to touch.</p>",
        thoughts: "I! love! femslash! genderbends! and! ziall! IN SKATES!!!!"
      },
      {
        title: "Harry Styles, Fangirl at Large",
        link: "https://archiveofourown.org/works/486479",
        author: "Anonymous",
        wordCount: "5k",
        fandoms: ["One Direction"],
        ships: "",
        tropes: ["Crack"],
        ratings: ["General"],
        warnings: "<spoiler>Satire of fandom</spoiler>",
        summary: "<p>In which Harry wakes up as a fangirl, and hijinks ensue.</p>",
        thoughts: "Peak 1D fandom satire. If you know you know."
      }

      /** END OF RECS **/
    ];

    const resultsEl = document.getElementById("results");

    const filters = {
      fandom: new Set(),
      trope: new Set(),
      rating: new Set(),
      modes: {
        fandom: "inclusive",
        trope: "inclusive",
        rating: "inclusive"
      }
    };

    const resetBtn = document.getElementById("resetFilters");

    resetBtn.addEventListener("click", () => {
      // 1. Clear JS filter state
      filters.fandom.clear();
      filters.trope.clear();
      filters.rating.clear();

      filters.modes.fandom = "inclusive";
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
        matchesFilter(filters.fandom, item.fandoms, filters.modes.fandom) &&
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
          <h3><a href="${item.link}" target="_blank">${item.title}</a></h3>
          <div class="meta"><strong>Author:</strong> ${item.author}
          <br /><strong>Word Count:</strong> ${item.wordCount || "Unknown"}
          <br /><strong>Fandom:</strong> ${item.fandoms.join(", ")}
          <br /><strong>Ships:</strong> ${item.ships || "None"}
          <br /><strong>Tropes:</strong> ${item.tropes.join(", ")}
          <br /><strong>Rating:</strong> ${item.ratings.join(", ")}
          <br /><details><summary>Warnings</summary> ${item.warnings || "None"}</details></div>

          <div class="summary">${item.summary}</div>
          ${item.thoughts ? `<div class="thoughts"><strong>My thoughts:</strong> ${item.thoughts}</div>` : ''}
        `;

        resultsEl.appendChild(card);
      });
    }

    applyFilters();
  </script>
</body>
</html>
