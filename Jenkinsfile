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
                sh 'php --version'
/*
                echo 'Node version is:'
                sh 'node --version'
*/
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
                            sh 'php composer install'
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
                            sh 'php composer test'
                        }
                    }
                }
            }
        }
    }
}
