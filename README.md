# jack-pwp

> Update the README.md file to briefly describe the project

This project has three paragraphs with three h2s and a sentence to go with each h2.

## Milestone 1 Feedback
Nice work on outlining your purpose/audience/goal and Persona. You have enough detail included here to inform a design strategy for your project.

If your target market will be professional peers and mid-large size tech companies, your site's presentation, style, and content should be tailored for that audience. Flawless layout on mobile devices is a must, and the look and feel should be polished and professional.

There are many ways that you can illustrate your soft skills, tech skills and intelligence that's both informative and visually engaging. The use of iconography and color along with simple and clear text content can be a simple way to add visual impact and a professional "polish" that might be a nice highlight of front end skill. Engaging design can be as simple as using one or two colors, a nice font, high quality content, and some imagery. It's really all about balance and consistency. Many beautiful examples can be found just by google searching "_web developer portfolio_". [FontAwesome](http://fontawesome.io/) is an great (and easy) way to incorporate iconography.

Your code looks pretty good overall, and your project has been set up correctly. Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development on [Milestone 2a](https://bootcamp-coders.cnm.edu/projects/personal/milestone-two/).
 
### Edits &amp; Suggestions
- No need to place those `<ul>`s inside a `<p>` tag. I would avoid this going forward.
- Same with the `<h2>` tags... I would move those outside of the `<p>` tags.

## Milestone 2&alpha; Feedback
This is a start - I'm just concerned as to whether the wireframes are detailed enough to guide your development. 

I don't see the side navigation anywhere in the wireframes, and I'm curious as to how you plan to handle this on mobile. There is definitely more room for detail in the content strategy. You could elaborate on your plan for content in the "Who I Am", "Work I've Done", and "Things I Do" sections. Also, what is going to live inside the header and footer? If there's nothing you plan to put there, then why do they exist? I see that you've removed the "Things I Do" section from the mobile wireframe. I'm not sure if this is intentional or just a mistake.

Overall the scale is good on mobile, and the layout plan you have should be pretty simple using Bootstrap. I would have liked to know more about your side navigation ideas - that way I could have suggested a tool or plugin that might work nicely for that. I'm not sure what tool you used to create these wireframes, but I think something like Mockflow's browser/phone templates and drag-and-drop UI components would have worked much better for you. Please take note that for a capstone-level project, the wireframes would need to be much more detailed.

I think you might have a much clearer plan in your mind for your PWP layout than what is currently here. In that case you might be ok. But if not, I would recommend finalizing things in a bit more detail before you begin coding PWP. Also I would recommend revisiting the Bootstrap Challenge and seeing if you can get a little further along before you begin too. Please see Edits &amp; Suggestions below.

Your Milestone 2a passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to start development on PWP whenever you're ready to begin. 

### Edits &amp; Suggestions
- Move your `/images` directory inside `public_html/documentation`. When you begin building your PWP, those images will do inside a `public_html/imgaes` directory.
- Avoid absolute links to internal assets (see lines 12,13 in HTML). Use _relative_ links instead. More info here: [MDN: Absolute vs Relative URLs](https://developer.mozilla.org/en-US/docs/Learn/Common_questions/What_is_a_URL#Absolute_URLs_vs_relative_URLs)

## PWP Final Feedback
Nice work on a very simple layout and theme. The contact form appears to work fine, please check your email for my test message. Overall your HTML, CSS, and JS code looks good. There are a couple of minor technical points I've highlighted under Edits &amp; Suggestions below.

Your PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Your overall grade across all of your PWP Milestones is 22/40 points. Please know that due to the 4-Tier evaluation rubric, 20/40 is considered a passing score.

- Milestone 1 - 20%: Tier III 30(0.2) = 6
- Milestone 2a - 20%: Tier II 20(0.2) = 4
- Milestone 2b - 10%: Tier II 20(0.1) = 2
- Milestone 3 - 50%: Tier II 20(0.5) = 10

### Edits &amp; Suggestions
- "xmlns" is not needed on the opening <html> tag. This is for XHTML, and we're using HTML5. This might have been autopopulated by PhpStorm.
- Remember to integrate meaningful `alt` text for every image. This is important for accessibility, and is useful for Search Engine indexing.
- Suggestion: More visual consistency might be achieved by having the card images be the same size/dimension.
