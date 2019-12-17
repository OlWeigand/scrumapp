@servers(['web' => 'oldrik@localhost'])


@setup
    $gitUrl = 'https://github.com/OlWeigand/scrumapp.git'
    $branch = (!empty($branch)) ? $branch : 'master'
    $basePath = 
@endsetup

@task('deploy')
    cd /path/to/site
    git pull origin master
@endtask
