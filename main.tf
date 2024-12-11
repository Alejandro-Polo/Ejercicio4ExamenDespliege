terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "5.74.0"
    }
  }
  required_version = ">= 1.9.0"
}

provider "aws" {
  region = "us-east-1"
}