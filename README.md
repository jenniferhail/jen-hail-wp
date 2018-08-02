## Auto Deploy Setup

### Hosting/Staging Setup - (WHM & CPANEL)
1.  Create a new hosting account via WHM http://72.52.173.139/whm
*(if your site requires dedicated hosting, you will want to replace the above IP )*
2.  Select “Add-on Domains” and set a domain via cPanel http://72.52.173.139/cpanel 
*(Example: client.mightily.com)*
3. Point the add-on domain to pubic_html/staging/web
4. Create a database and a database user
*(database: wpdb)
(database user: dbuser)*
5. Add the office IP 50.59.42.134 to "Remote MYSQL"
*(This allows your local WP project to use the remote database)*

### Bedrock Setup
You will want to install Bedrock on both local and hosting enviroments, follow the Bedrock instructions found at:
https://github.com/roots/bedrock#installation

In your local project, be sure to update the ".env" in the newly created project folder with the "remote" DB credentials using 72.52.173.139 use your DB_HOST.

You can find more information on bedrock at:
https://roots.io/bedrock/

### Local Setup - (MAMP PRO)
1. Add a new host to MAMP PRO *i.e. client.local*
2. Point it to [project-name]/web
3. Clone your project repo into
`/Users/[user]/[project]/web/app/themes/mightily/`

## BitBucket Autodeploy Setup

###Create SSH Key
1. SSH into the server and run `ssh-keygen`, leaving the name and password blank
2. Run `cat ~/.ssh/id_rsa.pub` then copy and paste the key
3. Add your key to the repo under Settings > Access keys

###Clone the repo on the server
1. Run `cd ~ then git clone --mirror git@bitbucket.org:<username>/<repo-name>.git`
2. Run `cd ~/<repo-name>.git`
3. Run `GIT_WORK_TREE=/home/<username>/public_html/staging/web/app/themes/mightily/ git checkout -f master`
4. Place the autodeploy.php script in the /public_html directory and update the two variables to point to your .git directory in the home folder and theme folder
5. In the Bitbucket repo, add a webhook Settings > Webhook and use `http://72.52.173.139/~<username>/autodeploy.php`

Now, when you push changes to the repo, autodeploy will automatically pull  changes to the theme in your theme directory.

## Troubleshooting
If you visit the site in a browser and you see a 500 error, you might need to update the directory and file permissions via SSH

### Change Permissions on Directories Recursively
`find /path/to/base/dir -type d -exec chmod 755 {} +`

### Change Permissions on Files Recursively
`find /path/to/base/dir -type f -exec chmod 644 {} +`

### Test SSH connectivity to bitbucket
`ssh -Tv git@bitbucket.org`

## Server Root (pre-launch)
The following  outlines what is required to happen just before a site launches in order to change the web root of the user account (on the server).

1. Update document root for the cpanel user as well as apache. Need to edit/create two files:
`/usr/local/apache/conf/userdata/USERNAME/DOMAIN.COM/config.conf`
`/var/cpanel/userdata/USERNAME/DOMAIN.COM`

2. Scan config file directories for apache configuration:
Run `/scripts/ensure_vhost_includes --all-users`

3. Run `/scripts/rebuildhttpdconf` to rebuild conf file
then run `service httpd restart` to restart apache

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
