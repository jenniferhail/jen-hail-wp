## Auto Deploy Setup

### Hosting/Staging Setup - (WHM & CPANEL)
1.  Create a new hosting account via WHM http://72.52.173.139/whm
*(if your site requires dedicated hosting, you will want to replace the above IP )*
2.  Select “Add-on Domains” and set a domain via cPanel http://72.52.173.139/cpanel 
*(Example: client.mightily.com)*
3. Point the add-on domain to pubic_html/dev/web
4. Create a database and a database user
*(database: wpdb)
(database user: dbuser)*
5. Add the office IP 50.59.42.134 to "Remote MYSQL"
*(This allows your local WP project to use the remote database i.e. the staging area)*

### Bedrock Setup
You will want to install Bedrock on both local and hosting enviroments, follow the Bedrock instructions found at:
https://github.com/roots/bedrock#installation

In your local project, be sure to update the ".env" in the newly created project folder with the "remote" DB credentials using 72.52.173.139 use your DB_HOST.

You can find more information on bedrock at:
https://roots.io/bedrock/

### Local Setup - (MAMP PRO)
1. Add a new host to MAMP PRO *i.e. local.client.com*
2. Point it to the [project-name]/web
3. Update virtual hosts
`/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf`
4. Clone your project repo into
`/Users/[user]/[project]/web/app/themes/mightily/`

**vhost example**
```php
<VirtualHost *:80>
    DocumentRoot "/Users/[user]/[project]/web"
    ServerName local.[project-name].com
</VirtualHost>
```

### BitBucket Autodeploy Setup

3. SSH into the server and run `ssh-keygen`, leaving the name and password blank
4. Run `cat ~/.ssh/id_rsa.pub | pbcopy` and paste in Avatar > Bitbucket Settings > SSH key
5. Run `cd ~ then git clone --mirror git@bitbucket.org:<username>/<repo-name>.git`
6. Run `cd ~/<repo-name>.git`
7. Run `GIT_WORK_TREE=/home/<username>/public_html/dev git checkout -f master`
8. Place the autodeploy.php script in the /public_html directory and update the script variables to point to your theme folder
9. In the repo, add a webhook and use `http://72.52.173.139/~<username>/autodeploy.php`

This will automatically deploy any changes you make to the theme in your theme directory.

### Troubleshooting
If you visit the site in a browser and you see a 500 error, you might need to update the directory and file permissions via SSH

#### Change Permissions on Directories Recursively
`find /path/to/base/dir -type d -exec chmod 755 {} +`

#### Change Permissions on Files Recursively
`find /path/to/base/dir -type f -exec chmod 644 {} +`

#### Test SSH connectivity to bitbucket
`ssh -Tv git@bitbucket.org`

## Layouts
Layouts are the building blocks that allow publishers to stack content that do unique things.

* Individual layouts are managed in **separate field groups.**
* Layouts are **cloned** into using ACF's flexible content.

*Note: It is important that you never create new fields inside of the master Layout field group. You should only clone layouts into the master field group.*

| Layout Names | Description |
| --------- | ----------- |
| Accordion | Uses title, content, and link |
| Basic Content | Uses WYSIWYG |
| Cards | Uses title, content, image, link |
| CTA | Uses title, content, image, link. |
| Hero | Uses image, title, subtitle, and link. |
| List | Uses relationship, creates static or filterable lists. |
| Pricing | Uses title, content, link. |
| Schedule | Uses title, WYSIWYG, link. |
| Slider | Uses title, content, link, and image. |
| Tabbed Content | Uses title, content, link. |

#### How to use layouts inside the template
The following code example will look for a files inside of the layouts directory i.e. layouts/layout-accordion.php
``` php
if(have_rows('layouts')) : while (have_rows('layouts')) : the_row();
    $layout_type = get_row_layout();
    include(locate_template('layouts/layout-' . $layout_type . '.php'));
endwhile; endif;
```

---

# Common Plugins
The following is a list of common plugins that we use on projects

| Plugin Names |
| --------- |
| ACF Content Analysis for Yoast SEO |
| ACF Flexible Content Modal |
| ACF to REST API |
| Admin Columns Pro |
| Advanced Custom Fields PRO |
| Compress JPEG & PNG images |
| Gravity Forms |
| Redirection |
| SearchWP |
| User Role Editor Pro |
| WP All Import Pro |
| Yoast SEO |
