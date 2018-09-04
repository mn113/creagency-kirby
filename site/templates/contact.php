<?php snippet('header') ?>

    <main class="main" role="main">
        
        <div class="wrap wide side-by-side">

            <form action="https://formspree.io/recyclebing@gmail.com" method="POST">
                <h2>Contact Us</h2>
                <p>Thanks for your interest. Please send your message via the following form. We will respond ASAP.</p>
                <p>
                    <label for="name">Your name</label>
                    <input type="text" name="name">
                </p>
                <p>
                    <label for="_replyto">Your email</label>
                    <input type="email" name="_replyto">
                </p>
                <select name="subject">
                    <option>Subject of your enquiry:</option>
                    <option>---</option>
                    <option value="1">Graphic Design</option>
                    <option value="2">Web Design</option>
                    <option value="3">Product Design</option>
                    <option value="4">Music Videos</option>
                    <option value="5">Billing</option>
                    <option value="6">Job Opportunities</option>
                </select>
                <br>
                <textarea placeholder="Type your message here"></textarea>
                <br>
                <input type="submit" value="Send">
            </form>

            <img src="<?= $page->images()->first()->url() ?>">

        </div>
        
    </main>

<?php snippet('footer') ?>