pipeline {
    agent any
    stages {
        stage('show environment') {
            steps {

                echo 'The Jenkins shell user is:'
                sh 'whoami'

                echo 'PHP version is:'
                sh 'php --version'

                echo 'Node version is:'
                sh 'node --version'
            }
        }
        stage('backend') {
            steps {

                echo 'PHP Tests'
                sh 'backend/vendor/bin/composer test'
            }
        }
    }
}
