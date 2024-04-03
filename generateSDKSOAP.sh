wsdltophp generate:package \
    --urlorpath="https://abr.business.gov.au//abrxmlsearch/AbrXmlSearch.asmx?WSDL" \
    --destination="." \
    --namespace="ABN\\AbnServiceAPI"\
    --composer-name="abn/abn_service_sdk"\
    --force
