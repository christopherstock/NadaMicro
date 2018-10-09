pipeline {

    agent any

    stages
    {
        stage( 'show environment' )
        {
            steps
            {
                echo 'The Jenkins shell user is:'
                sh 'whoami'

                echo 'PHP version is:'
                sh '/c/wamp64/bin/php/php7.2.10/php.exe --version'

                echo 'Node version is:'
                sh 'node --version'
            }
        }

        stage( 'backend' )
        {
            stages
            {
                stage( 'Install Composer Dependencies' )
                {
                    steps
                    {
                        dir( 'backend' )
                        {
                            echo 'Install Composer dependencies'
                            sh 'composer install'
                        }
                    }
                }

                stage( 'Perform PHPUnit backend tests' )
                {
                    steps
                    {
                        dir( 'backend' )
                        {
                            echo 'Perform PHPUnit backend tests'
                            sh 'composer test'
                        }
                    }
                }
            }
        }
    }
}
