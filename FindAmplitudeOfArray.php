<?php
    system("cls");
    print("Input a count of elements in array:\r\n");
    $nElems = intval(chop(fgets(STDIN)));
    if ($nElems == 0) 
    {
        echo "Empty arrays not allowed\r\n";
        fgetc(STDIN);
        exit(1);
    }
    $iNumbers = array();
    srand();
    echo("Generating array by filling " . $nElems . " elements\r\n");
    for ($i = 0; $i < $nElems; $i++)
    {
        $nItem = rand(1, 100);
        $iNumbers[] = $nItem;
        printf("%d ", $iNumbers[$i]);
    }
    $iMin = $iNumbers[0];
    $nMinIndex = 0;
    $iMax = $iNumbers[0];
    $nMaxIndex = 0;
    for ($i = 1; $i < $nElems; $i++)
    {
        if($iNumbers[$i] > $iMax)
        {
            $iMax = $iNumbers[$i];
            $nMaxIndex = $i;
        }
        if($iNumbers[$i] < $iMin)
        {
            $iMin = $iNumbers[$i];
            $nMinIndex = $i;
        }
    }
    printf("\r\nFound maximum element:%d with index %d\r\n", $iMax, $nMaxIndex);
    printf("Found minimum element:%d with index %d\r\n", $iMin, $nMinIndex);
    printf("Found amplitude: %d\r\n", $iMax - $iMin);
    fgetc(STDIN);
?>