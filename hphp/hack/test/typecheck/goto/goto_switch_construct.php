<?hh

function gotoSwitchConstruct(int $x): void {
  switch ($x) {
    case 1:
      goto L1;
      break;
    case 2:
      goto L2;
      break;
  }

  L0:
  print("L0");

  L1:
  print("L1");

  L2:
  print("L2");
}
