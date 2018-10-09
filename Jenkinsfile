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

                echo 'Node version is:'
                sh 'node --version'
            }
        }

        stage( 'backend' )
        {
            steps
            {
                dir( 'backend' )
                {
                    stage( 'Install Composer Dependencies' )
                    {
                        steps
                        {
                            echo 'Install Composer dependencies'
                            sh 'composer install'
                        }
                    }

                    stage( 'Perform PHPUnit backend tests' )
                    {
                        steps
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
