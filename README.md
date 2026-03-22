# Security Audit - Mutillidae

This repository contains the security audit performed on the Mutillidae vulnerable web application.

## Objective
To identify vulnerabilities based on OWASP Top 10.

## Tools Used
- Burp Suite
- OWASP ZAP

## Vulnerabilities Found
- SQL Injection
- Cross-Site Scripting (XSS)
- Broken Authentication
- Security Misconfiguration
- Cross-Site Request Forgery (CSRF)

## Description
This project focuses on vulnerability identification and documentation. No code fixes were implemented; only mitigation strategies were proposed.

## Proposed Fixes

- SQL Injection: Use prepared statements
- XSS: Apply output encoding
- CSRF: Implement CSRF tokens
- Authentication: Enforce strong passwords
- Misconfiguration: Secure server configuration
