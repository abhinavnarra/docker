# Create a sample PHP container which connects to a private MySQL 

## Setup Environment

### Install system dependencies on local
    sudo apt-get -y update
    sudo apt-get -y install git docker mysql docker-compose
    sudo pip install virtualenv

### Clone the code
    cd ~/
    git clone git@github.com:abhinavnarra/docker.git
    
### Create virtual environment and activate
    virtualenv -p python3 ~/env/docker
    source ~/env/docker/bin/activate


### Run application
    docker-compose up

### check db connections
localhost:8000