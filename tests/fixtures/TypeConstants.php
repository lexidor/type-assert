<?hh // strict
/*
 * Copyright (c) 2016, Fred Emmott
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 */

namespace Facebook\TypeAssert\TestFixtures;

class TypeConstants {
  const type TInt = int;
  const type TBool = bool;
  const type TFloat = float;
  const type TString = string;
  const type TNum = num;
  const type TArrayKey = arraykey;
  const type TTuple = (string, int);
  const type TStringArray = array<string>;
  const type TStringStringArray = array<string, string>;

  const type TNullableString = ?string;

  const type TStdClass = \stdClass;
  const type TStringVector = Vector<string>;
  const type TStringStringMap = Map<string, string>;
  const type TStringVectorVector = Vector<Vector<string>>;
  const type TIntTraversable = Traversable<int>;
  const type TIntContainer = Container<int>;

  const type TFlatShape =
    shape('someString' => string, 'someNullable' => ?string);

  const type TNestedShape =
    shape('someString' => string, 'someOtherShape' => self::TFlatShape);

  const type TShapeWithContainer = shape('container' => Vector<string>);
  const type TVecOfShapes = vec<self::TFlatShape>;

  const type TEnum = ExampleEnum;

  const type TIntVec = vec<int>;
  const type TIntVecVec = vec<vec<int>>;
  const type TStringStringDict = dict<string, string>;
  const type TStringStringVecDict = dict<string, vec<string>>;
  const type TStringKeyset = keyset<string>;

  /* HH_IGNORE_ERROR[4045] array without generics */
  const type TArrayWithoutGenerics = array;
  const type TShapeWithArrayWithoutGenerics = shape(
    'one' => bool,
    /* HH_IGNORE_ERROR[4045] array without generics */
    'two' => array,
  );
}
