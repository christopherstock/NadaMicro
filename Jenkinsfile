pipeline {

    agent any

    stages {

        stage('show environment') {
            steps {


                echo 'Use user stock'
                sh 'su - stock -s/bin/bash'


                echo 'I am ..'
                sh 'whoami'

                echo 'PHP version is:'
                sh 'php --version'

                echo 'Node version is:'
                sh 'node --version'
            }
        }




    }
}
